<?php

namespace App\Http\Controllers;

use App\Http\Requests\produkRequest;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = produk::all();

        return view('pages.admin.produk.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(produkRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        produk::create($data);
        return redirect()->route('produk.index');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = produk::findOrFail($id);
        return view('pages.admin.produk.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(produkRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        $item = produk::findOrFail($id);

        $item->update($data);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = produk::findOrFail($id);
        $item->delete();
        return redirect()->route('produk.index');
    }
}
