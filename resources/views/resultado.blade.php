@extends('master')
@section('contenido')  
<head>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<style>

    body{
        
        background-image: url(../img/k.jpg);
        
        background-size: 50%;


    }
	
    .contenedor{

        border-color: black;
        border:20px;
        margin-top: 20px;
        margin: 50px auto;
        border-radius: 10px;
        margin-right: 25%;
        margin-left: 25%;
        width: 50%;
        height: 400px;

    }

    .contenedor{

        transition: .8s;
        background-color:rgba(0,0,0 ,.8);
        box-shadow:inset;
    

    }
    
    .boton{

    float: right;

}


</style>
<br><br><br><br>
<div class="contenedor">
<br><br>
<center>
    <h1><font color="white">Bienvenido <br>
    {{$alum->nombre}} <br>
    grado: {{$alum->curso}} <br>
    por quien deseas votar </font></h1>
    <br>
    <a href="{{route('form_listado', $alum->id)}}" class="btn btn-warning"> Listado de candidatos </a>
    <br>
    <a href="{{url('/')}}" class="btn btn-danger"> Regresar </a>
    
    </center>
</div>
<br><br>
<br><br>
<br>
@stop