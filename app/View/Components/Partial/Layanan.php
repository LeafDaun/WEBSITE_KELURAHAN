<?php

namespace App\View\Components\Partial;

use App\Models\Layanan as ModelsLayanan;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layanan extends Component
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
        $layanan = ModelsLayanan::all();
        return view('components.partial.layanan', compact('layanan'));
    }
}
