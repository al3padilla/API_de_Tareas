<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTareaRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:pendiente,en_progreso,completada',
            'fecha_limite' => 'required|date|after_or_equal:today',
        ];
    }

     public function messages()
    {
        return [
            'fecha_limite.after_or_equal' => 'La fecha límite debe ser hoy o en el futuro.',
        ];
    }
}
