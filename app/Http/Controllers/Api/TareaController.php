<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use App\Http\Requests\StoreTareaRequest;
use App\Http\Requests\UpdateTareaRequest;
use App\Http\Resources\TareaResource;
use App\Models\Tarea;

class TareaController extends Controller
{
     public function index()
    {
        $tareas = Tarea::all();
        return TareaResource::collection($tareas);
    }

    public function store(StoreTareaRequest $request)
    {
        $tarea = Tarea::create($request->validated());
        return new TareaResource($tarea);
    }

    public function show(Tarea $tarea)
    {
        return new TareaResource($tarea);
    }

    public function update(UpdateTareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->validated());
        return new TareaResource($tarea);
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->noContent();
    }
}
