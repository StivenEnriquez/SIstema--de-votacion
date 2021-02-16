<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidato';
    protected $fillable = [
        'cedula_candidato',
        'nombre',
        'cod_candidato',
        'foto',
        
        
    ];
}
