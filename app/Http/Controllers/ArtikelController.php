<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Artikel;
use App\Categori;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::latest()->get();

        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori = Categori::select('id', 'nama_kategori')->get();

        return view('artikel.create', compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create([
            'judul' => \Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->gambar,
            'categoris_id' => $request->categoris_id,
        ]);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $artikel->gambar =  $request->file('gambar')->getClientOriginalName();
            $artikel->save();
        }

        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categori = Categori::select('id', 'nama_kategori')->get();
        $artikel = Artikel::find($id);

        return view('artikel.edit', compact('categori', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        $artikel->Update([
            'judul' => \Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->gambar,
            'categoris_id' => $request->categoris_id,
        ]);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $artikel->gambar =  $request->file('gambar')->getClientOriginalName();
            $artikel->save();
        }

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return redirect()->back();
        }
        Storage::delete($artikel->gambar);
        $artikel->delete();

        return redirect()->route('artikel.index');
    }
}
