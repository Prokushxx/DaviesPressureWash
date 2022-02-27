<?php

namespace App\Http\Livewire\Service;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.service.home')->extends('layouts.app');
    }
}
