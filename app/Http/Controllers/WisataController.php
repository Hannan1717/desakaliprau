<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\wisataRequest;
use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = wisata::all();

        return view('pages.admin.wisata.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(wisataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        wisata::create($data);
        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $wisata = Wisata::where('slug', $slug)->firstOrFail();
        return view('pages.detailwisma', ['wisata' => $wisata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Wisata::findOrFail($id);
        return view('pages.admin.wisata.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(wisataRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        $item = Wisata::findOrFail($id);

        $item->update($data);

        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Wisata::findOrFail($id);
        $item->delete();
        return redirect()->route('wisata.index');
    }
}
