<?php

namespace App;
use App\Dokter;
use App\Join;

use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    protected $table = 'table_days';

    public function Hari()
    {
        return $this->hasMany(Join::class, 'days_id');
    }
}
