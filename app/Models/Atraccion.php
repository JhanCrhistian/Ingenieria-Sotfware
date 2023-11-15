<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraccion extends Model
{
    use HasFactory;

    protected $table = 'atracciones';
    protected $fillable = ['nombre', 'descripcion', 'establecimiento_id'];

    // Si hay alguna relación con otros modelos, puedes definirlas aquí

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }
}