<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-5 shadow-sm">
            <h1>Registrar nuevo cliente</h1>
            <form action="{{ asset('/clientes') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control" name="dni" id="dni">
                    <label for="nombres">Nombre</label>
                    <input class="form-control" type="text" name="nombres" id="nombres">
                    <label for="apellidos">Apellido</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad">
                    
                    <div class="d-flex justify-content-center mt-3 gap-3">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>