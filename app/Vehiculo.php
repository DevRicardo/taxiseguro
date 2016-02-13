<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculos';




    public function conductores(){
        return $this->belongsToMany('App\Conductor')->withPivot('targetacontrol_id', 'estado');
    }

    public function propietarios(){
        return $this->belongsToMany('App\Propietario')->withPivot('fecha', 'estado');
    }
}