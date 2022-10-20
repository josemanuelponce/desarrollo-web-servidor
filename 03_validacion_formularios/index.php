<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temp_titulo = depurar($_POST["titulo"]);
        $temp_precio = depurar($_POST["precio"]);
        if (isset($_POST["consola"])) {
            $temp_consola = depurar($_POST["consola"]);
        }else {
            $temp_consola = "";
        }
        $temp_descripcion = depurar($_POST["descripcion"]);

        if (empty($temp_titulo)) {
            $error_titulo = "El Títutlo es obligatorio";
        }else {
            if (strlen($temp_titulo)>40) {
                $error_titulo = "El titulo no puede tener mas de 40 carracteres";
            }else {
                $titulo = $temp_titulo;
            }
        }

        if (empty($temp_precio)) {
            $error_precio = "El precio es obligatorio";
        } else {
            $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
        }

        if (!$temp_precio) {
            $error_precio = "El precio debe ser un número";
        } else {
            $temp_precio = round($temp_precio, 2);
            if ($temp_precio < 0) {
                $error_precio = "El precio no puede ser negativo";
            } else if ($temp_precio >= 1000) {
                $error_precio = "El precio no puede ser superior a 1000";
            } else {
                $precio = $temp_precio;
            }
            if (empty($temp_consola)) {
                $error_consola = "La consola es obligatoria";
            }else {
                $consola = $temp_consola;
            }
            }
            if ($temp_descripcion < 255) {
                $error_descripcion = "Descripcion menor a 255";
            }

        }

        if (isset($titulo) && isset($precio) && isset($consola) && isset($descripcion)) {
            echo "<p>$titulo</p>";
            echo "<p>$precio</p>";
            echo "<p>$consola</p>";
            echo "<p>$descripcion</p>";
        }
        
        
        /*echo htmlspecialchars($_POST["titulo"]);
            echo "<br>";
            echo htmlspecialchars($_POST["precio"]);*/



        //var_dump (trim($_POST["titulo"]));
        //var_dump (stripslashes($_POST["titulo"]));// eliminar las barras






    


    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    ?>
    <form action="" method="post">
        <p>Titulo:<input type="text" name="titulo">
            <span class="error">
                * <?php
                    if (isset($error_titulo)) echo $error_titulo
                    ?>
            </span>
        </p>
        <p>Precio:<input type="text" name="precio">
            <span class="error">
                * <?php
                    if (isset($error_precio)) echo $error_precio
                    ?>
            </span>
        </p>
        <p>
        <select name="consola" >
        <option value="" selected disabled hidden></option>
        <option>PS4</option>
        <option>PS5</option>
        <option>SWITCH</option>
        <option>XBOX</option><br><br>
        </select>
        <span class="error">
                * <?php
                    if (isset($error_consola)) echo $error_consola;
                    ?>
            </span>
        </p>
        <p>
            <textarea name="descripcion" placeholder="Max. 255 carácteres"></textarea>
                <span class="error">
                * <?php
                    if (isset($error_descripcion)) echo $error_descripcion;
                    ?>
            </span>
            </p>
        <input type="submit" name="Crear">
        

    </form>
</body>

</html>