<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;

class ModuleHeader extends Component
{
    public $title;
    public $description;

    public function __construct($title, $description = null)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.module-header');
    }
}