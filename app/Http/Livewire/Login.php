<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
  protected $listeners = ['loginUser' => 'submit'];

  public $email,$password;

  public $rules = [
  'email'=>'required|exists:users,email|email',
  'password'=>'required',
  ];

  public $messages = [
  'required'=>'*Please fill out this field',
  ];

  public function updated($dtuff){
  $this->validateOnly($dtuff);
  }
  
  public function submit(){
    // dd($this->email);
    $this->validate();

    if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
      
      return "hello";

    }
    else{
      session()->flash('error','Something went wrong');
    }
  }
    public function render()
    {
        return view('livewire.login');
    }
}
