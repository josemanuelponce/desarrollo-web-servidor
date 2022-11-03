<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5</title>
</head>

<body>
    <?php
    $personas = [
        ['26267994Q', 'Jose'],
        ['12324565G', 'Erico'],
        ['29814567Q', 'Mel'],
    ];
    ?>
    <table border>
        <tr>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Validar dni</th>
        </tr>

        <?php

        foreach ($personas as $persona) {
            list($dni, $nombre) = $persona;
            $resultado = validacion("$dni");
        ?>
            <tr>
                <td><?php echo $dni ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $resultado ?></td>
            </tr>

        <?php
        }
        ?>
        <?php
        function validacion(string $temp_dni)
        {
            $letras = strtoupper(substr($temp_dni, -1));
            $temp_dni = substr($temp_dni, 0, -1);
            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8) {
                echo "<p>Es correcto</p>";
            } else {
                echo "<p>No es correcto</p>";
            }


            return $temp_dni;
        }

        ?>
    </table>
</body>

</html>