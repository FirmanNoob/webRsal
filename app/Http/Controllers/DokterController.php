<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Days;
use \App\Speciality;
use \App\Dokter;
use \App\Join;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->Dokter = new Dokter();
    // }

    public function index()
    {
        $dokter = Dokter::with('days')->get();
        return view('dokter.index',compact('dokter'));
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
        // $rules = [
        //     'name' => 'required|unique:table_dokters',
        //     'gambar' => 'required',
        //     'hari_id' => 'required',
        //     'speciality_id' => 'required',
        //     'from' => 'required',
        //     'to' => 'required',
        //   ];
          
        //   $messages = [
        //     'required'  => 'Data :attribute Harus Di Isi.',
        //     'unique'    => ':attribute is already used'
        //   ];
          
        // $request->validate($rules,$messages);

        // $dokter = Dokter::create([
        //     'name' => $request->name,
        //     'gambar' => $request->gambar,
        //     'hari_id' => $request->hari_id,
        //     'speciality_id' => $request->speciality_id,
        //     'from' => $request->from,
        //     'to' => $request->to,
        // ]);

        $data = $request->all();
        $dokter = new Dokter;
        $dokter->name = $data['name'];
        $dokter->gambar = $data['gambar'];
        $dokter->speciality_id = $data['speciality_id'];
        $dokter->save();

        if (count($request->days_id) > 0 ) {
            foreach($data['days_id'] as $item => $value){
                $datas = array(
                    'dokter_id' => $dokter->id,
                    'days_id' => $data['days_id'][$item],
                    'from' => $data['from'][$item],
                    'to' => $data['to'][$item],
                );
                Join::create($datas);
            }
        }


        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/dokter/', $request->file('gambar')->getClientOriginalName());
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
        $dokter = Dokter::with('join')->where('id',$id)->first();
        // dd($dokter);
        // var_dump($dokter);
        return view('dokter.show',compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit',compact('dokter'));
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
