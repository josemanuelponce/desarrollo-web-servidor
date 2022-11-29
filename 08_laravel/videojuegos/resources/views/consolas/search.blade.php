<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        @include('header')
        <h1>Index de consolas</h1>
        <br>
        <form method="get" action="{{ route('consolas.search') }}">
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Buscar por titulo</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Año de salida</th>
                            <th>Generación</th>
                            <th>Descripción</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consolas as $consola)
                        <tr>
                            <td>{{$consola->nombre }}</td>
                            <td>{{$consola->anio_salida }}</td>
                            <td>{{$consola->generacion}}</td>
                            <td>{{$consola->descripcion}}</td>
                            <td>
                                <form action="{{route('consolas.show', ['consola' => $consola -> id ]) }}" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('consolas.destroy', ['consola' => $consola -> id])}}"
                                    method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('consolas.edit', ['consola' => $consola -> id])}}" method="get">
                                    <button class="btn btn-secondary" type="submit">Editar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
        @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>