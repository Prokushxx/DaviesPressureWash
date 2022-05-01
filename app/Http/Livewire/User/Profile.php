<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
  public $userId;
  public $successMessage;
  public $errorMessage;

  public function mount()
  {
    $finduserdata = User::where('id', auth()->user()->id)->get();
    $this->name = $finduserdata[0]['name'];
    $this->email = $finduserdata[0]['email'];
    $this->address = $finduserdata[0]['address'];
    $this->telephone = $finduserdata[0]['telephone'];
    $this->userId = auth()->user()->id;
  }

  /** Update Username */

  public $name;
  public function upName()
  {
    $this->validate([
      'name' => 'required|unique:users'

    ], [
      'required' => '*Cannot Be Empty',
      'exists' => '*Name Already Exists',
    ]);
    $this->successMessage = 'Username Update Successful';

    $userdata = User::find($this->userId);
    $userdata->update(['name' => $this->name]);
  }

  /**========================================================= */


  /** Update Email */

  public $email;
  public function upEmail()
  {
    $this->validate([
      'email' => 'required|unique:users'

    ], [
      'required' => '*Cannot Be Empty',
      'exists' => '*Email Already Exists',
    ]);
    $this->successMessage = 'Email Update Successful';

    $userdata = User::find($this->userId);
    $userdata->update(['email' => $this->email]);
  }

  /**========================================================= */

  
  /** Update Address */

  public $address;
  public function upAddress()
  {
    $this->validate([
      'address' => 'required'

    ], [
      'required' => '*Cannot Be Empty',
      'exists' => '*aess Already Exists',
    ]);
    $this->successMessage = 'Address Update Successful';

    $userdata = User::find($this->userId);
    $userdata->update(['address' => $this->address]);
  }

  /**========================================================= */

  /** Update Telephone */

  public $telephone;
  public function upTelephone()
  {
    $this->validate([
      'telephone' => 'required'

    ], [
      'required' => '*Cannot Be Empty',
      'exists' => '*Number is the Same',
    ]);
    $this->successMessage = 'Telephone Update Successful';

    $userdata = User::find($this->userId);
    $userdata->update(['telephone' => $this->telephone]);
  }

  /**========================================================= */



  /** Change Password */

  public $password, $newpassword;
  public $rules = [
    'password' => 'required',
    'newpassword' => 'required'
  ];

  public $messages = [
    'required' => '*Cannot be empty',
  ];

  public function updated($unique)
  {
    $this->validateOnly($unique);
  }

  public function upPassword()
  {
    $current_password = auth()->user()->password;
    $this->validate();
    if (Hash::check($this->password, $current_password)) {
      $findinfo = User::find($this->userId);
      $findinfo->update([
        'password' => Hash::make($this->newpassword)
      ]);
      $this->dispatchBrowserEvent('updated', [
        'title' => 'Updated Password',
        'icon' => 'success',
      ]);
    } else {
      $this->errorMessage = 'Password Incorrect';
    }
    $this->password = null;
    $this->newpassword = null;
  }

  /** ========================================================== */

    public function render()
    {
        return view('livewire.user.profile')->extends('layouts.app');
    }
}
