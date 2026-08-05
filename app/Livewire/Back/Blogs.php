<?php

namespace App\Livewire\Back;

use Livewire\Component;
use App\Models\Blog;

class Blogs extends Component
{
    public function render()
    {
        $dbs=Blog::latest('id')->get();
        return view('livewire.back.blogs', compact('dbs'))->layout('layouts.back');
    }
}
