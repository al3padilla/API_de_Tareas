<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'fecha_limite'
    ];

    protected $casts = [
        'fecha_limite' => 'date',
    ];

    //"extra - tarea atrasada"
    protected $appends = ['atrasada']; 
    public function getAtrasadaAttribute(): bool
{
    return $this->estado !== 'completada' && $this->fecha_limite->isPast();
}
}
