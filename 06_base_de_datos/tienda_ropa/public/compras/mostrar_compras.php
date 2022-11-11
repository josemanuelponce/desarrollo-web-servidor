<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Compras</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $usuario = $_GET["usuario"];
    }
    ?>
    <div class="row">
            <div class="col-4">
                <p>Nombre: <?php echo $nombre ?></p>
                <p>Talla: <?php echo $talla ?></p>
                <p>Precio: <?php echo $precio ?></p>
                <p>Categoría: <?php echo $categoria ?></p>
                <a class="btn btn-secondary" href="index.php">Volver</a>
                <form action="editar_prenda.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                    <input type="hidden" name="talla" value="<?php echo $talla ?>">
                    <input type="hidden" name="precio" value="<?php echo $precio ?>">
                    <input type="hidden" name="categoria" value="<?php echo $categoria ?>">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
            <div class="col-4">
                <img witdh="200" height="300" src="../..<?php echo $imagen ?>">
            </div>
    <h1>Compras de <?php echo $usuario ?></h1>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>