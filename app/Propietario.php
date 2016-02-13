<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table='propietarios';




    public function vehiculos(){
        return $this->belongsToMany('App\Vehiculo')->withPivot('fecha', 'estado');
    }
}