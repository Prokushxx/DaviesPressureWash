<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reservation;
use Livewire\WithPagination;

class Navbar extends Component
{
  use WithPagination;

  public $reserve = false;

  // protected $listeners = ['value' => 'openReservation'];

  public function openReservation(){
    $this->reserve = true;
  }

  public function closeView(){
    $this->reserve = false;
  }

  public function delete($id){
    $find = Reservation::find($id);
    $find->delete();
  }


    public function render()
    {
      if(auth()->user()){
      $data = Reservation::with('service', 'user')->where('user_id', auth()->user()->id)->paginate(5);
        return view('livewire.navbar',compact('data'));
    }
    return view('livewire.navbar');
  }
}
