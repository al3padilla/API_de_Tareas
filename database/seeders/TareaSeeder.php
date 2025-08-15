<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    
    public function run():void
    {
        \App\Models\Tarea::factory()->count(20)->create();
    }
}
