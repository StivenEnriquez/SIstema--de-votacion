<div class="container">
    <h2> Consulta de Productos </h2> <br> <br>
    <form action ="{{route('consulta_productos')}}" method="POST" >
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="codigo estudiante" aria-label="Username" aria-describedby="basic-addon1" id="cedula_alumno" name="cedula_alumno" required>
        </div>
        <button type="submit" class="btn btn-success">Consultar</button>
    </form>
</div>