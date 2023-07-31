<?php

namespace App\Http\Controllers;

use App\Http\Requests\makananRequest;
use App\Models\makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = makanan::all();

        return view('pages.admin.makanan.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(makananRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        makanan::create($data);
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = makanan::findOrFail($id);
        return view('pages.admin.makanan.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(makananRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        $item = makanan::findOrFail($id);

        $item->update($data);

        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = makanan::findOrFail($id);
        $item->delete();
        return redirect()->route('makanan.index');
    }
}
