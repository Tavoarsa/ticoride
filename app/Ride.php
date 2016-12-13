<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $table ='rides';
    protected $fillable = [
        'name_ride', 'idUser','descripcion','from','to','lat_start','long_start','lat_end','long_end',
        'hour_start','hour_end','activo'
    ];
    protected $guarded = ['id'];
}
