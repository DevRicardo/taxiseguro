<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table='conductores';



    public function vehiculos(){
        return $this->belongsToMany('App\Vehiculo')->withPivot('targetacontrol_id', 'estado');
    }
}