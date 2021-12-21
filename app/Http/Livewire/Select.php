<?php

namespace App\Http\Livewire;

use App\Dokter;
use Livewire\Component;

class Select extends Component
{
    public $speciality;
    public $hari;
    public function render()
    {
        $dokters = Dokter::orderBy('speciality_id')->get();
        $haris = Dokter::all();
        return view('livewire.select')->with(['dokters' => $dokters,'haris' => $haris]);
    }
}
