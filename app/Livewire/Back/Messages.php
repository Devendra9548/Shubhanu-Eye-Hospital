<?php

namespace App\Livewire\Back;

use Livewire\Component;

class Messages extends Component
{
    public function render()
    {
        return view('livewire.back.messages')->layout('layouts.back');
    }
}
