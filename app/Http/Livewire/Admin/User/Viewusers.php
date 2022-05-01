<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Viewusers extends Component
{
  use WithPagination;
  public $viewresmode = false;

  public function deactivate($id)
  {
    $person = User::find($id);
    $person->update([
      'active_flag' => false,
    ]);
  }

  public function activate($id)
  {
    $person = User::find($id);
    $person->update([
      'active_flag' => true,
    ]);
  }

  public function render()
  {
    $data = User::with('reservation')->paginate(6);
    // dd($data);
    return view('livewire.admin.user.viewusers', compact('data'))->extends('layouts.sidebar');
  }
}
