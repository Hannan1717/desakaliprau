<?php

namespace App\Http\Controllers;

use App\Http\Requests\pejabatRequest;
use App\Models\pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = pejabat::all();
        

        return view('pages.admin.pejabat.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.pejabat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(pejabatRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        pejabat::create($data);
        return redirect()->route('pejabat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(pejabat $pejabat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = pejabat::findOrFail($id);
        return view('pages.admin.pejabat.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(pejabatRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        $item = pejabat::findOrFail($id);

        $item->update($data);

        return redirect()->route('pejabat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = pejabat::findOrFail($id);
        $item->delete();
        return redirect()->route('pejabat.index');
    }
}
