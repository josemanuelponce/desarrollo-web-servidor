<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
</head>

<body>
    
    <?php
    $personas = [
        ['Jose Manuel', 'Ponce', rand(0, 100)],
        ['Eric', 'Erico', rand(0, 100)],
        ['Pepe', 'Mel', rand(0, 100)],
    ];
    ?>
    <table border>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Rango de edad</th>
        </tr>

        <?php

        foreach ($personas as $persona) {
            list($nombre, $apellido, $edad) = $persona;
            $resultado = edad("$edad");
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $apellido ?></td>
                <td><?php echo $edad ?></td>
                <td><?php echo $resultado ?></td>
            </tr>

        <?php
        }
        ?>
        <?php
        function edad ( int $anio){
            $resultado = match (true) {
            $anio >= 65 => 'Jubilado',
            $anio >= 18 => 'Mayor de edad',
            default => 'Menor de edad',
        };
        return $resultado;
        }
        
        ?>
    </table>

</body>

</html>