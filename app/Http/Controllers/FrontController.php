<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use App\Artikel;
use App\Dokter;
use App\Days;
use App\Join;

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
    public function pmspesialistik()
    {
        return view('front.pmspesialistik');
    }
    public function sejarah()
    {
        return view('front.sejarah');
    }
    public function alur()
    {
        return view('front.alur');
    }
    public function hyperbaric()
    {
        return view('front.hyperbaric');
    }
    public function angiografi()
    {
        return view('front.angiografi');
    }
    public function mcheckup()
    {
        return view('front.mcheckup');
    }
    public function aesthetic()
    {
        return view('front.aesthetic');
    }
    public function melati()
    {
        return view('front.melati');
    }
    public function voluntary()
    {
        return view('front.voluntary');
    }
    public function penunjangm()
    {
        return view('front.penunjangm');
    }
    public function audiometri()
    {
        return view('front.audiometri');
    }
    public function rekammdis()
    {
        return view('front.rekammdis');
    }
    public function kamarbersalin()
    {
        return view('front.kamarbersalin');
    }
    public function sterilisasi()
    {
        return view('front.sterilisasi');
    }
    public function rawatinap()
    {
        return view('front.rawatinap');
    }
    public function ambulance()
    {
        return view('front.ambulance');
    }
    public function cs()
    {
        return view('front.cs');
    }
    public function kereta()
    {
        return view('front.kereta');
    }
    public function laundry()
    {
        return view('front.laundry');
    }
    public function prohani()
    {
        return view('front.prohani');
    }
    public function jenazah()
    {
        return view('front.jenazah');
    }
    public function pendaftaran()
    {
        return view('front.pendaftaran');
    }
    public function penjagaan()
    {
        return view('front.penjagaan');
    }
    public function depbangdiklat()
    {
        return view('front.depbangdiklat');
    }
    public function pengelolaanlimbah()
    {
        return view('front.pengelolaanlimbah');
    }
    public function showdokter($id)
    {
        $dokter = Dokter::with(['join'])->where('id',$id)->first();
        // dd($dokter);
        return view('front.showdokter',compact('dokter'));
    }
}
