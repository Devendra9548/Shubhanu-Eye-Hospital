<?php

namespace App\Livewire\Back;

use Livewire\Component;

class BlogCategory extends Component
{
    public function render()
    {
        return view('livewire.back.blog-category')->layout('layouts.back');
    }
}
