<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use App\Artikel;
use App\Dokter;

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
    public function show(Artikel $blog)
    {
        $artikel_detail = $blog;
        $artikelterkait = Artikel::latest()->get()->random(3);
        $categori = Categori::withCount('Artikel')->get();

        return view('front.artikel_detail', compact('artikel_detail', 'categori', 'artikelterkait'));
    }
    public function katasambutan()
    {
        return view('front.katasambutan');
    }
    public function jdwldokter()
    {
        $dokter = Dokter::all();
        return view('front.jdwldokter',compact('dokter'));
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
