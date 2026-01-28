<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalonMontaje extends Model
{
    protected $fillable = [
        'salon_id',
        'montaje_id',
        'capacidad'
    ];
}
