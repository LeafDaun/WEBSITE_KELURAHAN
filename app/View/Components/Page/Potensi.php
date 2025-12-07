<?php

namespace App\View\Components\Page;

use App\Models\Potensi as ModelsPotensi;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Potensi extends Component
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
        // $potensi = ModelsPotensi::all();
        return view('components.page.potensi');
    }
}
