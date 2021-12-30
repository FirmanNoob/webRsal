<?php

namespace App;
use App\Days;
use App\Dokter;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'days_dokter';
    protected $fillable = [
        'dokter_id',
        'days_id',
        'from',
        'to'
    ];
    // public function Dokter()
    // {
    //     return $this->hasOne('\App\Dokter');
    // }
    public function Dokter()
    {
        return $this->belongsTo('\App\Dokter');
    }
    public function Hari()
    {
        return $this->belongsTo(Days::class, 'hari_id', 'id');
    }
}
