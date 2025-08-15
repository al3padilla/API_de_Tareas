<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TareaResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'estado' => $this->estado,
            'fecha_limite' => $this->fecha_limite->format('Y-m-d'),
            'atrasada' => $this->atrasada,
            'creada' => $this->created_at->format('Y-m-d H:i:s'),
            'actualizada' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
} 

