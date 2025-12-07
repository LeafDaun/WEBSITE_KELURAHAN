<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{

    public function index()
    {
        return view('components.page.pesan');
    }


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email',
            'hp'     => 'required|max:20',
            'pesan'  => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Pesan::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'hp'    => $request->hp,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
