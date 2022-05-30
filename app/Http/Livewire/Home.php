<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',['info'=>Service::take(3)->get()])->extends('layouts.app');
    }
}
