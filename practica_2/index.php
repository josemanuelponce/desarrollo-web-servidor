<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica_2</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_primerA = depurar($_POST["primerA"]);
        $temp_segundoA = depurar($_POST["segundoA"]);
        $temp_dni = depurar($_POST["dni"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_correo = depurar($_POST["correo"]);


        //Validacion dni
        if (empty($temp_dni)) {
            $error_dni = "El DNI es obligatorio";
        } else {
            $pattern = "/^[0-9]{8}[a-zA-Z]$/";


            if (!preg_match($pattern, $temp_dni)) {
                $error_dni = "El DNI tiene 8 dígitos y un carácter";
            } else {
                $letras = strtoupper(substr($temp_dni, -1));
                $temp_dni = substr($temp_dni, 0, -1);
                if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8) {
                    $dni = $temp_dni;
                } else {
                    $error_dni = "No valido numero incorrectos";
                }
            }
        }

        //Validacion nombre
        if (empty($temp_nombre)) {
            $error_nombre = "El nombre es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $error_nombre = "El nombre solo puede contener letras";
            } else {
                $nombre = $temp_nombre;
                echo ucwords("$nombre");
            }
        }

        //Validacion de primer apellido
        if (empty($temp_primerA)) {
            $error_primerA = "El apellido es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_primerA)) {
                $error_primerA = "El apellido solo puede contener letras";
            } else {
                $primerA = $temp_primerA;
                echo ucwords(" $primerA");
            }
        }

        //Validacion de segundo apellido
        if (empty($temp_segundoA)) {
            $error_segundoA = "El apellido es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_segundoA)) {
                $error_segundoA = "El apellido solo puede contener letras";
            } else {
                $segundoA = $temp_segundoA;
                echo ucwords(" $segundoA");
            }
        }

        //Validacion de edad
        if (empty($temp_edad)) {
            $error_edad = "La edad es obligatoria";
        } else {
            if ($temp_edad < 0 || $temp_edad > 120) {
                $error_edad = "La edad tiene que ser entre 0 y 120";
            } else {
                if ($temp_edad < 18) {
                    $error_edad = "Eres menor de edad";
                } else {
                    $edad = $temp_edad;
                }
            }
        }

        //Validacion de correo
        $needle = "hola";
        if (empty($temp_correo)) {
            $error_correo = "El correo es obligatorio";
        } else {
            $temp_correo = filter_var($temp_correo, FILTER_VALIDATE_EMAIL);

            if (!$temp_correo) {
                $error_correo = "El email no es válido";
            } else {
                if (str_contains($temp_correo, $needle)) {
                    $error_correo = "Palabra no permitida";
                } else {
                    $correo = $temp_correo;
                }
            }
        }
    }






    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    ?>
    <form action="" method="post">
        <p>Nombre
            <input type="text" name="nombre">
            <span class="error">
                * <?php if (isset($error_nombre)) echo $error_nombre ?>
            </span>
        </p>
        <p>Primer apellido
            <input type="text" name="primerA">
            <span class="error">
                * <?php if (isset($error_primerA)) echo $error_primerA ?>
            </span>
        </p>
        <p> Segundo apellido
            <input type="text" name="segundoA">
            <span class="error">
                * <?php if (isset($error_segundoA)) echo $error_segundoA ?>
            </span>
        </p>
        <p>Dni
            <input type="text" name="dni">
            <span class="error">
                * <?php if (isset($error_dni)) echo $error_dni ?>
            </span>
        </p>
        <p>Edad
            <input type="number" name="edad">
            <span class="error">
                * <?php if (isset($error_edad)) echo $error_edad ?>
            </span>
        </p>
        <p>Correo
            <input type="text" name="correo" placeholder="example@hotmail.com">
            <span class="error">
                * <?php if (isset($error_correo)) echo $error_correo ?>
            </span>
        </p>
        <input type="submit" name="Enviar">
        </p>

    </form>
</body>

</html>