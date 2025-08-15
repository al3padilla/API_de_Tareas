<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTareaRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'titulo' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'sometimes|in:pendiente,en_progreso,completada',
            'fecha_limite' => 'sometimes|date|after_or_equal:today',
        ];
    }
}
