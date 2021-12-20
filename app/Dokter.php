<?php

namespace App;
use App\Days;
use App\Speciality;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'table_dokters';
    protected $fillable = [
        'name',
        'gambar',
        'hari_id',
        'speciality_id',
        'from',
        'to'
    ];

    public function Hari()
    {
        return $this->belongsTo(Days::class, 'hari_id', 'id');
    }

    public function Speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }
}
