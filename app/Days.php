<?php

namespace App;
use App\Dokter;

use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    protected $table = 'table_days';

    public function Dokter()
    {
        return $this->hasMany(Dokter::class, 'hari_id', 'id');
    }
}
