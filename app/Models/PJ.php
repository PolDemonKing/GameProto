<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PJ extends Model
{
    use HasFactory;
    
    protected $table = 'pjs';  
    protected $fillable = ['nombre', 'vida', 'ataque', 'defensa', 'nivel'];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class);
    }
}
