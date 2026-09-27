<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mainbanner extends Component
{
    /**
     * Create a new component instance.
     */
    public $img;
    public $pagename;
    public function __construct($img,$pagename)
    {
        $this->img=$img;
        $this->pagename=$pagename;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mainbanner');
    }
}
