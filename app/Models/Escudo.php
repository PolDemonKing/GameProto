<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escudo extends Model
{
    use HasFactory;

    protected $table = 'escudos';
    protected $fillable = ['nombre', 'descripcion', 'tipo', 'defensa'];

    public function objeto()
    {
        return $this->belongsTo(Objeto::class);
    }
}
