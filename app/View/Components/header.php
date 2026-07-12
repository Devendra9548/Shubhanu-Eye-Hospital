<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public $facebook='';
    public $linkedin='';
    public $instagram='';
    public $twitter='';
    public $youtube='';
    public $email='';
    public $phone='';
    public function __construct($facebook,$linkedin,$instagram,$twitter,$youtube,$email,$phone)
    {
       $this->facebook=$facebook;
       $this->linkedin=$linkedin;
       $this->instagram=$instagram;
       $this->twitter=$twitter;
       $this->youtube=$youtube;
       $this->email=$email;
       $this->phone=$phone;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
