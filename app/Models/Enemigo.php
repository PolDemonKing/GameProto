<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemigo extends Model
{
    use HasFactory;

    protected $table = 'enemigos'; 
    protected $fillable = ['nombre', 'vida', 'ataque', 'defensa', 'nivel'];

    public function slime()
    {
        return $this->hasMany(Slime::class);
    }

    public function goblin()
    {
        return $this->hasMany(Goblin::class);
    }
}
