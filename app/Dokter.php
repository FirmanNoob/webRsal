<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';
    protected $fillable = [
        'name',
        'speciality',
        'hari',
        'gambar',
        'jadwal'
  ];
}
