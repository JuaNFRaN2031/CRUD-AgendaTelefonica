<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    /*public function scopeNombres($query, $nombres)
    {
        if ($nombres) {
            return $query->where('nombres', 'like', "%$nombres%");
        }
    }
    public function scopeApellidos($query, $apellidos)
    {
        if ($apellidos) {
            return $query->where('apellidos', 'like', "%$apellidos%");
        }
    }*/
    public function scopeBuscarpor($query, $tipo, $buscar)
    {
        if (($tipo) && ($buscar)) {
            return $query->where($tipo, 'like', "%$buscar%");
        }
    }
}
