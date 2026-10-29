<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RecetaResource;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreRecetasRequest;
use App\Http\Requests\UpdateRecetasRequest;

use App\Models\Receta;


class RecetaController extends Controller
{
        public function index()
    {
        return RecetaResource::collection(Receta::with('categoria','etiquetas','user')->get());
    }

public function show(Receta $receta)
{
    return new RecetaResource($receta->load('categoria','etiquetas','user'));
}

public function store(StoreRecetasRequest $request){ 
        $receta = Receta::create($request->all()); 
        $receta->etiquetas()->attach(json_decode($request->etiquetas)); 
        return response()->json(new RecetaResource($receta), Response::HTTP_CREATED); // 201 Created 
    }

    public function update(UpdateRecetasRequest $request, Receta $receta){ 
        $receta->update($request->all()); 
        if($etiquetas = json_decode($request->etiquetas)){ 
            $receta->etiquetas()->sync($etiquetas); 
        } 
        return response()->json(new RecetaResource($receta), Response::HTTP_OK); // 200 
    }

    public function destroy(Receta $receta){ 
        $receta->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204 No Content 
    }
}