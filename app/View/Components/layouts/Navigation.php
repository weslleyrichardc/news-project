<?php

namespace App\View\Components\layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
{
    public function __construct(
        public string $search = '',
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.layouts.navigation');
    }
}
