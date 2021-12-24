<?php

namespace App;
use App\Days;
use App\Join;
use App\Speciality;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'table_dokters';
    protected $fillable = [
        'name',
        'gambar',
        'speciality_id'
    ];

    public function Hari()
    {
        return $this->belongsTo(Days::class, 'hari_id', 'id');
    }

    public function Speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }

    public function Join()
    {
        return $this->hasMany(Join::class,'dokter_id');
    }
}
