<?php

namespace App;
use App\Join;
use App\Speciality;

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

    public function Hari()
    {
        return $this->belongsToMany('\App\Dokter')->using('\App\Days');
    }
    
    public function allData()
    {
        return DB::table('joindokterstodays')
            ->leftJoin('table_dokters', 'table_dokters.id', '=', 'joindokterstodays.dokter_id')
            ->leftJoin('table_days', 'table_days.id', '=', 'joindokterstodays.days_id')
            ->distinct()
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
