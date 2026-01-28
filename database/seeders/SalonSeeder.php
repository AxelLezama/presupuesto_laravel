<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salon;
use App\Models\Montaje;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $auditorio = Montaje::create(['name' => 'Auditorio']);
        $banquete = Montaje::create(['name' => 'Banquete']);
        $escuela = Montaje::create(['name' => 'Escuela']);

        $troje = Salon::create([
            'name' => 'Troje',
            'precioRenta' => 25000
        ]);

        $molino = Salon::create([
            'name' => 'Molino',
            'precioRenta' => 15000
        ]);
        $noria = Salon::create([
            'name' => 'La Noria',
            'precioRenta' => 10000
        ]);
        
        $troje->montajes()->attach($auditorio->id, ['capacidad' => 1000]);
        $troje->montajes()->attach($escuela->id, ['capacidad' => 800]);
        $troje->montajes()->attach($banquete, ['capacidad' => 900]);

        $molino->montajes()->attach($auditorio, ['capacidad' => 60]);
        $molino->montajes()->attach($escuela, ['capacidad' => 40]);
        $molino->montajes()->attach($banquete, ['capacidad' => 70]);

        $noria->montajes()->attach($auditorio, ['capacidad' => 10]);
        $noria->montajes()->attach($escuela, ['capacidad' => 15]);
        $noria->montajes()->attach($banquete, ['capacidad' => 10]);
    
        }
}
