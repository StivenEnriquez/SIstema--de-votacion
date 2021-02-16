<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <!-- Invoca la ruta del archivo css en el directorio local usando Blade  -->
        <link href="{{ url('/MDbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/MDbootstrap/css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ url('/MDbootstrap/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/MDbootstrap/css/estilos.css') }}" rel="stylesheet">
        <title>Sistema de Votacion</title>
    </head>
    <body class="antialiased">   
        <div >
            @yield('contenido')
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('/MDbootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>