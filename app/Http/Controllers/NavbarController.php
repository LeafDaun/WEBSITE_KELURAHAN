<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Layanan;
use App\Models\Potensi;
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
        $potensi = Potensi::all();
        return view('components.page.potensi', compact('potensi'));
    }

     function potensi_show($id)
    {
        $data = Potensi::findOrFail($id);
        return view('components.page.potensi-detail', compact('data'));
    }

    function layanan($id)
    {
        $data = Layanan::findOrFail($id);
        return view('components.page.layanan', compact('data'));
    }

    function show($id)
    {
        $data = Berita::findOrFail($id);
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
