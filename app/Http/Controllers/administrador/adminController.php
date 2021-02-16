<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Candidato;



class adminController extends Controller
{
    public function index(){
        $candidato = DB::table('candidato as can')
        ->select('can.id', 'can.nombre', 'can.cod_candidato','can.foto')
        ->get();
        return view('listado',['candidato' => $candidato] );


    }
    public function formularioregistro(){
        return view('Administrador.registrarAlumno');
    }
    
    public function registro(Request $request){

        Alumno::create($request->all());
        
        return view('Administrador.registrarAlumno');
    }

    public function can(){
        return view('Administrador.candidato');
    }

    public function candi(Request $request){

        Candidato::create($request->all());
        
        return  view('Administrador.candidato');
    }

}
