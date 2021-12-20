<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Days;
use \App\Speciality;
use \App\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dokter = \App\Dokter::all();
        $dokter = Dokter::with('speciality')->get();
        return view('dokter.index',['dokter'=>$dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hari = Days::select('id', 'hari')->get();
        $speciality = Speciality::select('id', 'speciality')->get();
        return view('dokter.create',compact('hari','speciality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokter = Dokter::create([
            'name' => $request->name,
            'gambar' => $request->gambar,
            'hari_id' => $request->hari_id,
            'speciality_id' => $request->speciality_id,
            'from' => $request->from,
            'to' => $request->to,
        ]);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $dokter->gambar =  $request->file('gambar')->getClientOriginalName();
            $dokter->save();
        }

        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
