<?php

namespace App\Http\Livewire\Admin\Reservation;

use App\Models\Reservation as ModelsReservation;
use Livewire\Component;
use Livewire\WithPagination;

class Allreservation extends Component
{
  use WithPagination;
  public $opt, $search;

  /** ACCEPT OR REJECT RESERVATIONS */
  public function accept($id)
  {
    $info = ModelsReservation::find($id);
    $info->update([
      'status' => 'Accepted',
    ]);
  }
  public function reject($id)
  {
    $info = ModelsReservation::find($id);
    $info->update([
      'status' => 'Rejected',
    ]);
  }
  public function pend($id)
  {
    $info = ModelsReservation::find($id);
    $info->update([
      'status' => 'Pending',
    ]);
  }

  /**============================================= */


  /** VIEW RESERVATIONS INFORMATION */

  public $viewresmode = false;
  public $username,$address,$email,$phone,$identify;
  public $servicename,$cost,$date,$time,$tatus;

  public $listeners = ['viewreserve'=>'openView'];

  public function openView($id){
    $this->viewresmode = true;
    $findres = ModelsReservation::with('user','service')->where('id',$id)->get();
    $this->username = $findres[0]['user']['name'];
    $this->address = $findres[0]['user']['address'];
    $this->email = $findres[0]['user']['email'];
    $this->phone = $findres[0]['user']['telephone'];
    $this->servicename = $findres[0]['service']['name'];
    $this->cost = $findres[0]['service']['cost'];
    $this->time = $findres[0]['time'];
    $this->date = $findres[0]['date'];
    $this->status = $findres[0]['status'];
    $this->identify = $id;
    // dd($findres);
  }

  public function editDateTime(){
    $information = ModelsReservation::find($this->identify);

    $new = $information->update(
      [
        $information->date = $this->date,
        $information->time = $this->time,
      ] 
      );
      if($new){
        $this->dispatchBrowserEvent('editDateTime',[
          'title' => 'Date / Time Updated Succesfully',
          'icon' => 'success',
        ]);
      }
  }

  public function closeModal(){
    $this->viewresmode = false;
  }

  /**============================== */


  public function render()
  {
    $variable = $this->opt;
    $search = '%' . $this->search . '%';

    switch ($variable) {
      case 'all':
        $data = ModelsReservation::with([
          'service',
          'user' => function ($query) use ($search) {
            $query->where('name', 'LIKE', $search);
          },
        ])->whereHas('user', function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        })->paginate(10);
        // dd($data);
        break;

      case 'accept':
        $data = ModelsReservation::with([
          'user' => function ($query) use ($search) {
            $query->where('name', 'LIKE', $search);
          },
          'service'
        ])->whereHas('user', function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        })->where('status', 'Accepted')->orderBy('created_at','asc')->paginate(10);
        break;


      case 'reject':
        $data = ModelsReservation::with([
          'user' => function ($query) use ($search) {
            $query->where('name', 'LIKE', $search);
          },
          'service'
        ])->whereHas('user', function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        })->where('status', 'Rejected')->orderBy('created_at','asc')->paginate(10);
        break;


      case 'pend':
        $data = ModelsReservation::with(['user' => function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        }, 'service'])->whereHas('user', function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        })->where('status', 'Pending')->orderBy('created_at','asc')->paginate(10);
        break;


      default:
        $data = ModelsReservation::with([
          'service',
          'user' => function ($query) use ($search) {
            $query->where('name', 'LIKE', $search);
          },
        ])->whereHas('user', function ($query) use ($search) {
          $query->where('name', 'LIKE', $search);
        })->paginate(10);
        break;
    }

    return view('livewire.admin.reservation.allreservation', compact('data'))->extends('layouts.sidebar');
  }
}
