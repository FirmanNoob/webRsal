<?php

namespace App;
use App\Speciality;
use App\Join;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Dokter extends Model
{
    protected $table = 'table_dokters';
    protected $fillable = [
        'name',
        'gambar',
        'speciality_id'
    ];

    public function Days()
    {
        return $this->belongsToMany('\App\Days');
    }
    public function Join()
    {
        return $this->hasMany('\App\Join');
    }

    public function Speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }

    // public function Join()
    // {
    //     return $this->hasOne('\App\Join');
    // }
}
