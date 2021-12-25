<?php

namespace App;
use App\Days;
use App\Join;
use App\Speciality;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dokter extends Model
{
    protected $table = 'table_dokters';
    protected $fillable = [
        'name',
        'gambar',
        'speciality_id'
    ];

    // public function Hari()
    // {
    //     return $this->belongsToMany(Days::class, 'joindokterstodays', 'days_id');
    // }
    
    public function allData()
    {
        return DB::table('joindokterstodays')
            ->leftJoin('table_dokters', 'table_dokters.id', '=', 'joindokterstodays.dokter_id')
            ->leftJoin('table_days', 'table_days.id', '=', 'joindokterstodays.days_id')
            ->get();

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
