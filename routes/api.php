<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\RecetaController;
use App\Http\Controllers\Api\EtiquetaController;


Route::apiResource('categorias', categoriaController::class); 
Route::apiResource('recetas', recetaController::class);
Route::apiResource('etiquetas', etiquetaController::class);

//Route::get('/user', function (Request $request) {
//return $request->user();
//})->middleware('auth:sanctum');