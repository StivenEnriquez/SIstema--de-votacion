@extends('master')
@extends('layouts.app')
@section('contenido')
<head>
<link href="/css/estilo.css" rel="stylesheet">
</head>
<style>
  
body{

background-image: url(../img/c.jpg);


background-size: 55%;
  
}
.contenedor{

border-color: black;
border:20px;
margin-top: 20px;
margin: 50px auto;
border-radius: 10px;
margin-right: 20%;
margin-left: 20%;
width: 60%;
height: 650px;




}

.contenedor{

transition: .8s;
background-color:rgba(0,0,0 ,.8);
box-shadow:inset;
   

}
</style>

<div class="contenedor">
        <br> 
            <center><h1><font color="white"> Registro de Candidatos </font></h1></center>
        <br>
    <form action="{{ url('Administrador/candidato') }}" method="post">
            @csrf
        <center><div class="center-block col-md-9 col-xs-9">
                <label  <font color="white" for="cedula_candidato">cedula candidato</font> </label>
                <input type="number" id='cedula_candidato' name='cedula_candidato' class="form-control" required> <br> <br>

                <label  <font color="white" for="nombre">Nombre</font></label>
                <input type="text" id='nombre' name='nombre' class="form-control" required> <br> <br>
        
                <label  <font color="white" for="cod_candidato">Codigo Candidato</font> </label>
                <input type="number" id='cod_candidato' name='cod_candidato' class="form-control" required> <br> <br>

                <label  <font color="white" for="foto">Foto</font></label>
                <input type="file" id='foto' name='foto' class="form-control" required> 
        
                </select><br> <br>
    
                <button type="submit" class="btn btn-success">Registrar </button>
                <a href="{{url('/Administrador')}}"><button2 class="btn btn-primary">Regresar</button2></a> 
                <br> <br>
                </div>
        </center>
    </form>
</div>
<br><br> 
<br><br>     
@stop