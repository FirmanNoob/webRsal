<?php

namespace App;
use App\Dokter;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $table = 'table_specialitys';

    public function Dokter()
    {
        return $this->hasMany(Dokter::class, 'speciality_id', 'id');
    }
}
