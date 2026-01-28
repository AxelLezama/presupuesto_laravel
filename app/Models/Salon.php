<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [
        'name',
        'precioRenta',
        'disponibilidad'
    ];


    //relacion de un salon tiene muchos montajes
    public function montajes()
    {
        return $this->belongsToMany(Montaje::class, 'salon_montaje')->withPivot('capacidad')->withTimestamps();
    }
}
