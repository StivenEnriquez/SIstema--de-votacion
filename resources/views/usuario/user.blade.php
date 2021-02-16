@extends('master')
@section('contenido')
    <head>
    <link href="css/estilo.css" rel="stylesheet">
    </head>

    <style>

    body{
        
        background-image: url(img/p.jpg);
        
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
        height: 500px;

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
    <br><br>
    <div class="contenedor">
	    <br><br><br>
                   <center>
                   <h1><font color="white" size="6" face="Comic Sans MS,arial,verdana">SISTEMA DE VOTACION </h1></font>
                   </center>
                   <br>
	            <center>
                <div class="center-block col-md-8 col-xs-8">
                    <h2><font color="white"> Codigo de Estudiantes</font> </h2> <br> <br>
                    <form action ="{{route('consulta')}}" method="POST" >
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Codigo Estudiante" aria-label="Username" aria-describedby="basic-addon1" id="cedula_alumno" name="cedula_alumno" required>
                        </div>
                        <button type="submit" class="btn btn-success">Consultar</button>
                    </form>
                    <br>
                </div>
                <center><a href="Administrador"><button class="btn btn-warning">ADMINISTRADOR</button></a></center>
    </div>
    <br><br><br><br><br>
@stop