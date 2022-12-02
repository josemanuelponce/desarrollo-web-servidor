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
        @include('header')
        <br>
        <h1>Esto es Compañia</h1>
        <br>
        <form method="get" action="{{ route('companias.search') }}">
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
                            <th>Sede</th>
                            <th>Fecha fundación</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companias as $compania)
                        <tr class="table table-dark">
                            <td>{{$compania->nombre }}</td>
                            <td>{{$compania->sede }}</td>
                            <td>{{$compania->fecha_fundacion}}</td>
                            <td>
                                <form action="{{route('companias.show', ['compania' => $compania -> id ]) }}"
                                    method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('companias.destroy', ['compania' => $compania -> id])}}"
                                    method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('companias.edit', ['compania' => $compania -> id])}}"
                                    method="get">
                                    <button class="btn btn-secondary" type="submit">Editar</button>
                                </form>
                            </td>
                        </tr>
                        @php
                        $videojuegos = $compania -> videojuegos;
                        @endphp
                        @foreach ($videojuegos as $videojuego)
                        <tr class="table table-light">
                            <td>{{$videojuego ->titulo}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
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