<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
  public $fullname,$email,$address,$password,$confirmpassword,$mobile;

  public $rules =[
  'fullname'=> 'required',
  'email'=> 'required|email|unique:users,email',
  'address'=> 'required',
  'mobile'=> 'required|min:8|max:8',
  'password'=> 'required',
  'confirmpassword'=> 'required|same:password',
  ];

  public $messages = [
   'required'=>'*This field cannot be empty',
   'email'=>'*This is not a valid email address',
   'unique'=>'*This email is already taken',
   'numeric'=>'*This is not a phone number',
   'same'=>'Password does not match',
   'min'=>'Must be 8 digits',
   'max'=>'Must be 8 digits',
  ];

  public function updated($we){
    $this->validateOnly($we);
  }
  public function submit(){
   $this->validate();
     $user = User::create([
      'name'=>$this->fullname,
      'email'=>$this->email,
      'address'=>$this->address,
      'telephone'=>$this->mobile,
      'password'=>Hash::make($this->password)
     ]);

    Auth::login($user);
    return redirect(url('home'));
   
  }

    public function render()
    {
        return view('livewire.register')->extends('layouts.app');
    }
}
