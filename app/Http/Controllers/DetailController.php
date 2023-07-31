<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use App\Models\produk;
use App\Models\wisata;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $item = wisata::where('slug', $slug)->firstOrFail();
        return view('pages.detailwisma', ['item' => $item]);
    }

    public function detailmakanan($slug)
    {
        $item = makanan::where('slug', $slug)->firstOrFail();
        return view('pages.detailwisma', ['item' => $item]);
    }

    public function detailproduk($slug)
    {
        $item = produk::where('slug', $slug)->firstOrFail();
        return view('pages.detailproduk', ['item' => $item]);
    }
}
