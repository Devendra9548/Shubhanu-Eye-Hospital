<?php

namespace App\Livewire\Back;

use Livewire\Component;
use App\Models\Blog;
use App\Models\BlogsCategory;

class Dashboard extends Component
{
    public function render()
    {
        $allblogs = Blog::count();
        $allcategories = BlogsCategory::count();

        return view('livewire.back.dashboard', compact('allblogs', 'allcategories'))
            ->layout('layouts.back');
    }
}