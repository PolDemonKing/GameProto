<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,       // Usuarios
            EnemigoSeeder::class,    // Enemigos
            ObjetoSeeder::class,     // Objetos
            PersonajesSeeder::class,  // Personajes
            EscudoSeeder::class,     // Escudos
            EspadaSeeder::class,     // Espadas
            PocionSeeder::class,     // Pociones
            GoblinSeeder::class,     // Goblins
            SlimeSeeder::class,      // Slimes
            PJSeeder::class,         // PJs
        ]);
    }
}
