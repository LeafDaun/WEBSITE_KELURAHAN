<?php

namespace App\View\Components\Partial;

use App\Models\Slide as ModelsSlide;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slide extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $slides = ModelsSlide::all();
        return view('components.partial.slide', compact('slides'));
    }
}
