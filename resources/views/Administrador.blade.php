@extends('master')
@extends('layouts.app')
@section('contenido')
     <head>
          <link href="/css/estilo.css" rel="stylesheet">
     </head>   
     <style>
  
          body{

               background-image: url(img/d.jpg);


               background-size: 50%;    


  
          }


          .contenedor{   

               border-color: purple;
               border:20px;
               margin-top: 20px;
               margin: 50px auto;
               border-radius: 10px;
               margin-right: 20%;
               margin-left: 20%;
               width: 60%;
               height: 480px;




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

     <div class="contenedor">
	          <div class="boton">
	               <a href="{{url('/')}}"><button  class="btn btn-danger">X</button></a>
                </div>
               <br><br><br>
               <h1 class="text-center"><font color="white" size="7" face="Comic Sans MS,arial,verdana"><center>Sistema De Votación </center></font></h1>
  
          <div class="center-block col-md-12 col-xs-8">
               <br>
                    <h2><font color="white" size="5"><center>Bienvenido Al Modulo de  Administración</center></font></h2>
               <br>
               <center>
                    <a href="{{url('/Administrador/registrarAlumno')}}"><button class="btn btn-primary">  <font size="4">Agregar Alumno</font></button></a>
                    <a href="{{url('/Administrador/candidato')}}"><button class="btn btn-success">  <font size="4">Agregar Candidato</font></button></a>
                    <a href="#"><button class="btn btn-warning">  <font size="4">Resultados</font></button></a>
                    <a href="{{url('/')}}"><button class="btn btn-danger">  <font size="4">Votación</font></button></a>
               </center>
          </div>
     </div>
     <br> <br>
     <br> 
@stop
