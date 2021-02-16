<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Candidato;

class votoController extends Controller
{
    public function form_consulta(){
        return view('home');

    }
    public function consultar(Request $request){
        $nombre = $request->input('cedula_alumno');
        $alum = Alumno::where('cedula_alumno', 'like', $nombre)->first();
        if($alum)
            return view('resultado', compact('alum'));
        else
            return view('mensaje');
        
    }
    public function votar($id){
        $alumn = Alumno::findOrFail($id);
        $candi = Candidato::all();
        return view('form_listado', compact('alumn', 'candi'));
    }
    public function votando(Request $request, $id){
        $alumno = Alumno::findOrFail($id);
        $alumno->cedula_alumno = $request->input('cedula_alumno');
        $alumno->nombre = $request->input('nombre');
        $alumno->curso = $request->input('curso');
        $alumno->cod_candidato = $request->input('cod_candidato');   
        $alumno->save();
        return view('mensaje1');
    }
}
