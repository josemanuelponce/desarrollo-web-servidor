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
                $dni = $temp_dni;
            }
        }

        //Validacion nombre
        if (empty($temp_nombre)) {
            $error_nombre = "El nombre es obligatorio";
        }else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
        }

        //Validacion de edad
        if (empty($temp_edad)) {
            $error_edad = "La edad es obligatoria";
        } else {
            if ($temp_edad<0 || $temp_edad>120) {
                $error_edad = "La edad tiene que ser entre 0 y 120";
            }else{
                if ($temp_edad<18) {
                $error_edad = "Eres menor de edad";
                }else {
                    $edad = $temp_edad;
                }
            }

        }

        //Validacion de correo
        $needle = "hola";
        if (empty($temp_correo)) {
            $error_correo = "El correo es obligatorio";
        }else {
            $temp_correo = filter_var($temp_correo, FILTER_VALIDATE_EMAIL);
            
            if (!$temp_correo) {
                $error_correo = "El email no es válido";
            } else {
                if (strpos($temp_correo, $needle)) {
                    $error_correo = "Palabra no permitida";
                }else {
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