<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    $productos = [
        ["Poni", 20, 1],
        ["Zelda", 30, 4],
        ["Alfa", 10, 5],
    ];

    

    $nombre = array_column($productos, 0);
    array_multisort($nombre, SORT_ASC, $productos);
    ?>
    <table border>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total de Cantidad</th>
        </tr>

        <?php
        $tProducto = 0;
        $tPrecio = 0;
        $tCantidad = 0;
        $tComprados = 0;
        $tAdquiridos = 0;
        foreach ($productos as $producto) {
            //Numero de productos
            $tProducto++;
            list($nombre, $precio, $cantidad) = $producto;
            //Total del precio
            $tPrecio = $tPrecio + $precio;
            //Multiplicacion de la cantidad y precio
            $tCantidad = $cantidad * $precio;
            //Total de todos los productos comprados
            $tComprados += $tCantidad;
            //Total de productos adquiridos
            $tAdquiridos += $cantidad;

        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $precio ?></td>
                <td><?php echo $cantidad ?></td>
                <td><?php echo $tCantidad ?></td>
            </tr>

        <?php
        }
        ?>

        <table>
            <tr>
                <td>Numero producto:<?php echo $tProducto ?></td>
                <td>Total precio:<?php echo $tPrecio ?></td>
                <td>Total productos comprados:<?php echo $tComprados ?></td>
                <td>Total productos Adquiridos:<?php echo $tAdquiridos ?></td>
               
            </tr>
        </table>

        
</body>

</html>