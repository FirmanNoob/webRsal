<?php

namespace App;
use App\Days;
use App\Dokter;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joindokterstodays';
    protected $fillable = [
        'dokter_id',
        'hari_id',
        'from',
        'to'
    ];
    public function Dokter()
    {
        return $this->hasMany(Dokter::class, 'd', 'id');
    }
    public function Hari()
    {
        return $this->belongsTo(Days::class, 'hari_id', 'id');
    }
}
