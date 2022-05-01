<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
  
    public function render()
    {
        return view('livewire.service.home',['info' => Service::all()])->extends('layouts.app');
    }
}
