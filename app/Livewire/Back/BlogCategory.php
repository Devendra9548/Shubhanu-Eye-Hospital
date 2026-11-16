<?php

namespace App\Livewire\Back;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BlogsCategory;

class BlogCategory extends Component
{
    use WithPagination;

    
    #[Url(as: 'search', history: false)]
    public string $search = '';

    public function updatedSearch($value)
    {
        $this->search = trim((string) $value) === '' ? '' : (string) $value;
        $this->resetPage();
    }

    public function render()
    {
        $search = trim($this->search);

        $dbs = BlogsCategory::with('parent')
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('bcname', 'like', "%{$search}%")
                      ->orWhere('bcslug', 'like', "%{$search}%")
                      ->orWhereHas('parent', function ($p) use ($search) {
                          $p->where('bcname', 'like', "%{$search}%");
                      });
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(7)
            ->withPath(url('/ds-admin/blogs-category'));

            

        $allCategories = BlogsCategory::orderBy('bcname')->get();

        return view('livewire.back.blog-category', compact('dbs', 'allCategories'))
            ->layout('layouts.back');
    }
}