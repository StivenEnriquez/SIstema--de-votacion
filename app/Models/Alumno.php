<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    public function candidatos(){
        return $this->belongsTo(Candidato::class, 'candidato', 'id');
    }

    /*public function stock(){
        return $this->cantidadProducto <= 10;
    }

    public static function findPrice($price){
        return static::where('precioProducto','=',$price)->first();
    }*/
    protected $fillable = [
        'cedula_alumno',
        'nombre',
        'curso'
        
    ];
}
