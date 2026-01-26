<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index(){

    //obtener todos los registros
        $venues = Venue::all();

    //retornar un json
        return response()->json([
            'status' => true,
            'message' => 'Lista de salones',
            'data' => $venues
        ], 200); 
    }

    //crear un nuevo salon (store)

    public function store(Request $request)
    {
        //validar datos
        $request->validate([
            'name' => 'required|string',
            'maxcapacity' => 'required|integer',
            'rentprice' => 'required|numeric'
        ]);

        //almacenar registro
        $venue = new Venue();
        $venue->name = $request->name;
        $venue->maxcapacity = $request->maxcapacity;
        $venue->rentprice = $request->rentprice;
        $venue->save();
        //retornar un json
        return response()->json([
            'status' => true,
            'message' => 'Salon creado correctamente',
            'data' => $venue
        ], 201);
    }
}
