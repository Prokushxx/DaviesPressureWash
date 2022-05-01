<?php

namespace App\Http\Livewire\User;

use App\Models\Reservation;
use Livewire\Component;
use Livewire\WithPagination;

class Viewreservations extends Component
{
  // protected $listeners = ['value' => 'openReservation'];

  // public function openReservation(){
  //   $this->reserve = true;
  // }

  use WithPagination;

  public function render()
  {
    
    return view('livewire.user.viewreservations');
  }
}
