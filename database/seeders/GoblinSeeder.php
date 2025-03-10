<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goblin;

class GoblinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goblin::factory()->create([
            'nombre' => 'Gobol',
            'vida' => 12,
            'ataque' => 1,
            'defensa' => 3,
            'nivel' => 1,
        ]);
    }
}
