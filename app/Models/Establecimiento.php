<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    protected $table = 'establecimientos';
    protected $fillable = ['nombre', 'ubicacion', 'tipo', 'servicios'];

    

    public function responsables()
    {
        return $this->hasMany(Responsable::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function atracciones()
    {
        return $this->hasMany(Atraccion::class);
    }

    public function hoteles()
    {
        return $this->hasMany(Hotel::class);
    }

    public function fechas()
    {
        return $this->hasMany(Fecha::class);
    }
}
