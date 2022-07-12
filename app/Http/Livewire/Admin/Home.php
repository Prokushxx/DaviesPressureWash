<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
  public $name, $desc, $cost;
  public $secretidentification;
  public $addmode = false;
  public $editmode = false;

  /** Open Add Modal and Close*/
  protected $listeners = ['addservice' => 'openAdd', 'close' => 'closeModal'];

  public function openAdd()
  {
    $this->name = null;
    $this->cost = null;
    $this->desc = null;
    $this->addmode = true;
  }

  public function closeModal()
  {
    $this->addmode = false;
    $this->editmode = false;
  }
  /**==================================================*/


  /** Real Time Add Form Validation and Store*/
  public $rules = [
    'name' => 'required|unique:services,name',
    'cost' => 'required',
    'desc' => 'required',
  ];

  public $messages = [
    'required' => '*This Field Cannot be Empty',
    'unique' => '*You Already Added This Service'
  ];

  public function updated($dtuff)
  {
    $this->validateOnly($dtuff);
  }

  public function submit()
  {
    $this->validate();
    $user =  Service::create([
      'name' => $this->name,
      'cost' => $this->cost,
      'desc' => $this->desc,
    ]);

    if ($user) {
      $this->dispatchBrowserEvent('addswal', [
        'title' => 'Added Succesfully',
        'icon' => 'success',
      ]);
    }
  }
  /**================================================*/

  /** Open Edit Mode and Set Data */
  public function editService($id)
  {
    $data = Service::where('id', $id)->get();
    $this->name = $data[0]['name'];
    $this->cost = $data[0]['cost'];
    $this->desc = $data[0]['desc'];
    $this->secretidentification = $id;
    $this->editmode = true;
  }

  public function edit()
  {
    $data = Service::find($this->secretidentification);
    $info = $data->update(
      [
        $data->name = $this->name,
        $data->cost = $this->cost,
        $data->desc = $this->desc,
      ]
    );
    if ($info) {
      $this->dispatchBrowserEvent('editswal', [
        'title' => 'Edit Successfull',
        'icon' => 'success'
      ]);
    }
  }

  /**==================================================== */


  /** Delete SERVICE */

  public function delete($id)
  {
    Service::find($id)->delete();
    $this->dispatchBrowserEvent('swal', [
      'title' => 'Delete Successfull',
      'icon' => 'success'
    ]);
  }

  /**====================================== */

  public function render()
  {
    return view('livewire.admin.home', ['data' => Service::all()])->extends('layouts.sidebar');
  }
}
