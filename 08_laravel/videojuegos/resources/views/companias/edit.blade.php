<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        
        <h1>Editar compañia</h1>
        <div class="row">
            <div class="col-9">
                <form action="">
                    @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{{ $compania -> nombre }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Sede</label>
                    <input class="form-control" type="text" name="sede" value="{{ $compania -> sede }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Fecha fundación</label>
                    <input class="form-control" type="date" name="fecha_fundacion" value="{{ $compania -> fecha_fundacion }}">
                </div>
                <button class="btn btn-primary" type="submit">Crear</button>
                <a class="btn btn-secondary" href="/companias">Listado</a>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>