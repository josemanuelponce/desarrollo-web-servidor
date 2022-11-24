<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Nueva consola</h1>
    <div class="row">
        <div class="col-6">
            <br>
            <br><br>
            <form method="post" action="{{route('consolas.store')}}">
                @csrf
            <div class="form-group mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Año de salida</label>
                <input class="form-control" type="text" name="anio_salida">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Generación</label>
                <select class="form-select" name="generacion">
                    <option value="1"> Generación 1</option>
                    <option value="2"> Generación 2</option>
                    <option value="3"> Generación 3</option>
                    <option value="4"> Generación 4</option>
                    <option value="5"> Generación 5</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Crear</button>
            <a class="btn btn-secondary" href="/consolas">Listado</a>
        </div>
    </form>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>