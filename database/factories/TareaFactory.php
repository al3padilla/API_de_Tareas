<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
   
    public function definition()
    {
        $estados = ['pendiente','en_progreso','completada'];
        return [
            'titulo' => $this->faker->sentence(4),
            'descripcion' => $this->faker->boolean(70) ? $this->faker->paragraph() : null,
            'estado' => $this->faker->randomElement($estados),
            'fecha_limite' => $this->faker->dateTimeBetween('-5 days','+20 days')->format('Y-m-d'),
       
        ];
    }
}
