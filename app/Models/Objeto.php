<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;
    
    protected $table = 'objetos'; 
    protected $fillable = ['nombre', 'rareza', 'descripcion'];

    public function espada()
    {
        return $this->hasOne(Espada::class);
    }

    public function escudo()
    {
        return $this->hasOne(Escudo::class);
    }

    public function pocion()
    {
        return $this->hasOne(Pocion::class);
    }
}
