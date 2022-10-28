<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <div class="container">

        <h1>Ejercicio 5</h1>

        <?php   //  FUNCIONES
        function calificacionIf(int $nota)
        {
            if ($nota < 5) {
                $calificacion = "Suspenso";
            } else if ($nota >= 5 && $nota < 7) {
                $calificacion = "Aprobado";
            } else if ($nota >= 7 && $nota < 9) {
                $calificacion = "Notable";
            } else {
                $calificacion = "Sobresaliente";
            }
            return $calificacion;
        }

        function calificacionMatch(int $nota)
        {
            $calificacion = match (true) {
                $nota < 5 => "Suspenso",
                $nota >= 5 and $nota < 7 => "Aprobado",
                $nota >= 7 and $nota < 9 => "Notable",
                default => "Sobresaliente"
            };
            return $calificacion;
        }
        ?>

        <?php   //  EJERCICIO VERSIÓN 1
        $estudiantes = [
            ["Luis", rand(0, 10)],
            ["Alfredo", rand(0, 10)],
            ["Elena", rand(0, 10)]
        ];
        ?>
        <div class="row">
            <div class="col-6">
                <h2>Tabla 1</h2>
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Nota </th>
                        <th>Calificación</th>
                    </tr>
                    <?php
                    foreach ($estudiantes as $estudiante) {
                        list($nombre, $nota) = $estudiante;
                    ?>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $nota ?></td>
                            <td><?php echo calificacionMatch($nota) ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <?php   //  EJERCICIO VERSIÓN 2 (CON 3 NOTAS)
                $estudiantes = [
                    ["Luis"],
                    ["Alfredo"],
                    ["Elena"]
                ];

                for ($i = 0; $i < count($estudiantes); $i++) {
                    $estudiantes[$i][1] = rand(0, 10);
                    $estudiantes[$i][2] = rand(0, 10);
                    $estudiantes[$i][3] = rand(0, 10);
                }
                ?>

                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Tabla 2</h2>
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Calificación media</th>
                    </tr>
                    <?php
                    foreach ($estudiantes as $estudiante) {
                        list($nombre, $nota1, $nota2, $nota3) = $estudiante;
                        $media = (int)round(($nota1 + $nota2 + $nota3) / 3);
                    ?>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $nota1 ?></td>
                            <td><?php echo $nota2 ?></td>
                            <td><?php echo $nota3 ?></td>
                            <td><?php echo calificacionMatch($media) ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>