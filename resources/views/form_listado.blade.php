@extends('master')
@section('contenido') 
<br>
<center><<h1> Listado de candidatos </h1></center>
<br><br>
<div class="container">
    <div class ="row">
    @foreach($candi as $p)
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/$p->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->nombre }} </h5>
                    <p class="card-text"> Identificador :  {{ $p->id }} </p>
                    <p class="card-text"> Codigo :  {{ $p->cod_candidato }} </p>
                    <form action ="{{route('votarCandi', $alumn->id)}}" method="POST">
                            @csrf
            
                            <input type="hidden" id='cedula_alumno' name='cedula_alumno' class="form-control" value="{{$alumn->cedula_alumno}}" required> 
                            <input type="hidden" id='nombre' name='nombre' class="form-control" value="{{$alumn->nombre}}" required>
                            <input type="hidden" id='curso' name='curso' class="form-control" value="{{$alumn->curso}}" required> 

                            <div class="col-md-6">
                                <input id="cod_candidato" type="hidden" class="form-control @error('cod_candidato') is-invalid @enderror" name="cod_candidato" value="{{$p->cod_candidato}}" required autocomplete="email">
                            </div>
                            <button type="submit" class="btn btn-success">votar</button>
                        </form>
                   </div>
            </div>
        </div>
    @endforeach
    </div>
    <br><br>
    <center><a href="{{url('/')}}" class="btn btn-success"> Regresar </a></center>
    <br><br>
</div>
@stop