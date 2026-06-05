<?php

namespace App\Livewire\Back;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
        return view('livewire.back.blogs')->layout('layouts.back');
    }
}
