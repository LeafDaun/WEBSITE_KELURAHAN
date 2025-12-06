<?php

namespace App\Http\Controllers;

use App\Models\Profil as ModelsProfil;
use App\View\Components\Page\Profil;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    function profil()
    {
        $data = ModelsProfil::findOrFail(1);
        return view('components.page.profil', compact('data'));
    }

     function potensi()
    {
        return view('components.page.potensi');
    }

    function layanan($id)
    {
        $data = $id;
        return view('components.page.layanan', compact('data'));
    }

     function show($id)
    {
        $data = $id;
        return view('components.page.berita-detail', compact('data'));
    }

    function galeri()
    {
        return view('components.page.galeri');
    }

    function kontak()
    {
        return view('components.page.kontak');
    }
}
