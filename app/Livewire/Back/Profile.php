<?php

namespace App\Livewire\Back;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.back.profile')->layout('layouts.back');
    }
}
