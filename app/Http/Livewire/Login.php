<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
  public $email, $password;

  public $rules = [
    'email' => 'required|exists:users,email|email',
    'password' => 'required',
  ];
  public $messages = [
    'required' => '*Please fill out this field',
  ];

  
  // public function __construct()
  // {
  //   $this->middleware('guest')->except('logout');
  //   $this->middleware('guest:super_user')->except('logout');
  //   $this->middleware('guest:user')->except('logout');
  // }

  public function updated($dtuff)
  {
    $this->validateOnly($dtuff);  
  }
  public function submit()
  {
    $this->validate();
    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
      if (Auth::user()->usertype == "member") {
        return redirect(url('home'));
      } else {
        return redirect(url('dashboard'));
      }
    } else {
       session()->flash('error', '*Something went wrong');
    }
  }

  public function render()
  {
    return view('livewire.login')->extends('layouts.app');
  }
}
