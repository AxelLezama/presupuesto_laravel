<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Montaje extends Model
{
    protected $fillable = [
        'name'
    ];

    public function salones()
    {
        return $this->belongsToMany(Salon::class, 'salon_montaje')->withPivot('capacidad')->withTimestamps();
    }
}
