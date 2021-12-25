<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Days;
use App\Dokter;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hari = Days::all();
        return view('jadwal.index',compact('hari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $days = $request->all();

        $master = new Days;
        $master->hari = $days['hari'];
        $master->save();

        return redirect()->route('jadwal.index');
    }

    public function listjadwal()
    {
        $dokter = Dokter::with('hari')->get();
        return view('jadwal.listjadwal',compact('dokter'));
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
        $jadwal = Days::find($id);
        if (!$jadwal) {
            return redirect()->back();
        }
        $jadwal->delete();

        return redirect()->route('jadwal.index');
    }
}
