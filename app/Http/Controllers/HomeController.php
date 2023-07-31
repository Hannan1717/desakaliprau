<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use App\Models\pejabat;
use App\Models\produk;
use App\Models\wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function wisata(Request $request)
    {
        $items = wisata::all();

        return view('pages.wisata', ['items' => $items]);
    }
    public function makanan(Request $request)
    {
        $items = makanan::all();

        return view('pages.makanan', ['items' => $items]);
    }
    public function produk(Request $request)
    {
        $items = produk::all();

        return view('pages.produk', ['items' => $items]);
    }

    public function profileDesa()
    {
        $pejabats = pejabat::all();
        return view('pages.profilDesa', ['pejabats' => $pejabats]);
    }
}
