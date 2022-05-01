<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class Home extends Component
{

    public function render()
    {
        return view('livewire.user.home',['info'=>Service::all()])->extends('layouts.app');
    }
    
}
