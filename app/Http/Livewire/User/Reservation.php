<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Reservation as ModelReservation;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class Reservation extends Component
{
  public $date, $time;

  public $rules = [
    'date' => 'required|after:today',
    'time' => 'required',
  ];

  public $messages = [
    'required' => '*Please fill out field below',
    'after' => '*The Date is Invalid'
  ];


  public function mount($id)
  {
    $data = Service::where('id',$id)->get()->toArray();
    $this->data = $data;
    $this->name = $data[0]['name'];
    $this->cost = $data[0]['cost'];
    $this->desc = $data[0]['desc'];
  }
  
  public function updated($stuff){
    $this->validateOnly($stuff);
  }
  
  public function submit(){
    $this->validate();
   $reserve =  ModelReservation::create([
      'time' => $this->time,
      'date' => $this->date,
      'user_id' => Auth::user()->id,
      'service_id' => $this->data[0]['id'],
    ]);

    if($reserve){
      $this->dispatchBrowserEvent('reserveadd',[
        'title' => 'Reservation Requested',
        'icon' => 'success',
        'text' => 'Check Reservations for Status Update'
      ]);
    }
  }

  public function render()
  {
    return view('livewire.user.reservation')->extends('layouts.app');
  }
}
