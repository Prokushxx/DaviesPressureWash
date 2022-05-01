<?php

namespace App\Http\Livewire\Admin\Service;

use Livewire\Component;

class Addservice extends Component
{
  public $editmode = true;
 
    public function render()
    {
        return view('livewire.admin.service.addservice');
    }
}
