<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Editar videojuegos</h1>
        <div class="row">
            <div class="col-9">
                <form action="">
                    @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Titulo</label>
                    <input class="form-control" type="text" name="titulo" value="{{ $videojuego -> titulo }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="text" name="precio" value="{{ $videojuego -> precio }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Pegi</label>
                    <select class="form-select" name="pegi" value="{{ $videojuego -> pegi }}">
                        <option value="3"> PEGI 3</option>
                        <option value="7"> PEGI 7</option>
                        <option value="12"> PEGI 12</option>
                        <option value="16"> PEGI 16</option>
                        <option value="18"> PEGI 18</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion">{{ $videojuego -> descripcion }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Crear</button>
                <a class="btn btn-secondary" href="/videojuegos">Listado Videojuegos</a>
            </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>