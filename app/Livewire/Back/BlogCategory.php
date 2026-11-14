<?php

namespace App\Livewire\Back;

use Livewire\Component;
use App\Models\BlogsCategory;

class BlogCategory extends Component
{
    public function render()
    {
        $dbs=BlogsCategory::with('parent')->orderBy('id', 'desc')->get();
        return view('livewire.back.blog-category', compact('dbs'))->layout('layouts.back');
    }
}
