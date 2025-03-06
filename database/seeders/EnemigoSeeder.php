<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enemigo; 

class EnemigoSeeder extends Seeder
{
    public function run(): void
    {
        Enemigo::factory()->create([
            'nombre' => 'Test',
            'vida' => 12,
            'ataque' => 1,
            'defensa' => 3,
            'nivel' => 1,
        ]);
    }
}
