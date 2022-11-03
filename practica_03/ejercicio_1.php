<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $productos = [
        ["Poni", 20],
        ["Zelda", 30],
        ["Alfa", 10],
    ];

    $nombre = array_column($productos, 0);
    array_multisort($nombre, SORT_ASC, $productos);
    ?>
    <table border>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>

        <?php
        $tProducto = 0;
        $tPrecio =0;
        foreach ($productos as $producto) {
            $tProducto++;
            list($nombre, $precio) = $producto;
            $tPrecio = $tPrecio + $precio;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $precio ?></td>
            </tr>

        <?php
        }
        ?>

        <table>
            <tr>
                <td>total producto:<?php echo $tProducto ?></td>
                <td>total precio:<?php echo $tPrecio ?></td>
            </tr>
        </table>

        
</body>

</html>