<?php

namespace App\Livewire\Back;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;
use App\Models\BlogsCategory;

class Blogs extends Component
{
    use WithPagination;

    #[Url(as: 'search', history: false)]
    public string $search = '';

    public function updatedSearch($value)
    {
        $this->search = trim((string) $value);
        $this->resetPage();
    }

    public function render()
    {
        $search = trim($this->search);

        $dbs = Blog::with('parent')
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                      ->orWhere('slug', 'like', "%{$search}%")
                      ->orWhere('author', 'like', "%{$search}%")
                      ->orWhereHas('parent', function ($p) use ($search) {
                          $p->where('bcname', 'like', "%{$search}%");
                      });
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(7)
            ->withPath(url('/ds-admin/blogs'));

        $allCategories = BlogsCategory::orderBy('bcname')->get();

        return view('livewire.back.blogs', compact('dbs', 'allCategories'))
            ->layout('layouts.back');
    }
}