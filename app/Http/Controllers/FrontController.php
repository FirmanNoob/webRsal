<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use App\Artikel;

class FrontController extends Controller
{
    public function index()
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(3);
        $artikelall = Artikel::latest()->get();
        $artikelterkait = Artikel::latest()->limit(3)->get();

        return view('front.index', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));
        // return view('front.index');
    }
    public function blog()
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(3);
        $artikelall = Artikel::latest()->get();
        $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('front.blog', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));
        // return view('front.blog');
    }
    public function katasambutan()
    {
        return view('front.katasambutan');
    }
    public function visi()
    {
        return view('front.visi');
    }
    public function sejarah()
    {
        return view('front.sejarah');
    }
    public function alur()
    {
        return view('front.alur');
    }
}
