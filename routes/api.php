<?php

use App\Http\Controllers\Api\VenueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//obtener salones
Route::get('/salones',[VenueController::class, 'index']);

//crear salones
Route::post('/salones',[VenueController::class, 'store']);
//crear salones
Route::post('/salones',[VenueController::class, 'store']);
//crear salones
Route::post('/salones',[VenueController::class, 'store']);
//crear salones
Route::post('/salones',[VenueController::class, 'store']);
//crear salones
Route::post('/salones',[VenueController::class, 'store']);