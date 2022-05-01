<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
  public $email, $password, $remember_me;
  public $errorMessage;

  public $rules = [
    'email' => 'required|exists:users,email|email',
    'password' => 'required',
  ];
  public $messages = [
    'required' => '*Please fill out this field',
  ];

  public function updated($dtuff)
  {
    $this->validateOnly($dtuff);
  }

  public function submit()
  {

    $this->validate();
    if (Auth::attempt(['email' => $this->email, 'password' => $this->password], filled($this->remember_me))) {
      if (Auth::user()->active_flag == true) {
        if (Auth::user()->user_type == "member") {
          return redirect(url('home'));
        } else {
          return redirect(url('dashboard'));
        }
      } else {
        Auth::logout();
        $this->dispatchBrowserEvent('deactivate', [
          'title' => 'Your Account is Disabled',
          'icon' => 'error',
        ]);
      }
    } else {
      $this->errorMessage = '*Password Incorrect';
    }
  }
  public function test()
  {
    // dd($this->email);
    $this->emit('addservice');
  }

  public function render()
  {
    return view('livewire.login')->extends('layouts.app');
  }
}
