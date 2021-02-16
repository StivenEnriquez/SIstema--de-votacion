@extends('master')
@extends('layouts.app')
@section('contenido')
<head>
<link href="/css/estilo.css" rel="stylesheet">
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
margin-right: 20%;
margin-left: 20%;
width: 60%;
height: 500px;




}

.contenedor{

transition: .8s;
background-color:rgba(0,0,0 ,.8);
box-shadow:inset;
   

}


</style>

<div class="contenedor">
    <br> 
   <center> <h1><font color="white"> Registro de Estudiantes </font></h1></center>
    <form action="{{ url('Administrador/registrarAlumno') }}" method="post">
    <br> <br>
        @csrf
       <center> <div class="center-block col-md-9 col-xs-9">
        <label  <font color="white" for="cedula_alumno">Codigo alumno </font> </label>
        <input type="number" id='cedula_alumno' name='cedula_alumno' class="form-control" required> <br> <br>
        
        <label <font color="white" for="nombre">Nombre </font></label>
        <input type="text" id='nombre' name='nombre' class="form-control" required> <br> <br>
    
        <label <font color="white" for="curso">curso </font></label>
        <select class="form-select" aria-label="Default select example" name="curso">
            <option value="1" > 1 </option>
            <option value="2" > 2 </option>
            <option value="3" > 3 </option>
            <option value="4" > 4 </option>
            <option value="5" > 5 </option>
            <option value="6" > 6 </option>
            <option value="7" > 7 </option>
            <option value="8" > 8 </option>
            <option value="9" > 9 </option>
            <option value="10" > 10 </option>
            <option value="11" > 11 </option>
            
        </select>
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>
        <a href="{{url('/Administrador')}}"><button2 class="btn btn-primary">Regresar</button2></a> 
        </center>
        <br> <br>
        <br> <br>
        <br> <br>
        <br> <br>
        </form>
    </div> 
 </div>  
<br> <br>
<br> <br><br>
@stop