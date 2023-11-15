<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';
    protected $fillable = ['nombre', 'correo', 'telefono', 'establecimiento_id'];

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }
}
