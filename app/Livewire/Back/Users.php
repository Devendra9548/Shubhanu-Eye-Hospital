<?php

namespace App\Livewire\Back;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.back.users')->layout('layouts.back');
    }
}
