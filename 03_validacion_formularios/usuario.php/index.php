<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $temp_nombre =depurar ($_POST["nombre"]);
            $temp_apellidos =depurar ($_POST["apellidos"]);
            $temp_dni = depurar ($_POST["dni"]);
            $temp_email = depurar ($_POST["email"]);
            $temp_fecha = depurar ($_POST["fecha"]);
        
            //  Validación del nombre
            if (empty($temp_nombre)) {
                $error_nombre = "El nombre es obligatorio";
            } else {
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

                if (!preg_match($pattern, $temp_nombre)) {
                    $error_nombre = "El nombre solo puede contener letras";
                } else {
                    if (strlen($temp_nombre) > 30) {
                        $error_nombre = "El nombre no puede tener más de 30 caracteres";
                    } else {
                        //  ÉXITO
                        $nombre = $temp_nombre;
                    }
                }
            }

            //  Validación de los apellidos
            if (empty($temp_apellidos)) {
                $error_apellidos = "El nombre es obligatorio";
            } else {
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

                if (!preg_match($pattern, $temp_apellidos)) {
                    $error_apellidos = "El nombre solo puede contener letras";
                } else {
                    if (strlen($temp_apellidos) > 30) {
                        $error_apellidos = "El nombre no puede tener más de 30 caracteres";
                    } else {
                        //  ÉXITO
                        $apellidos = $temp_apellidos;
                    }
                }
            }

            //  Validación del DNI
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
            //Validacion email
            
            if (empty($temp_email)) {
                $error_email = "El email es obligatorio";
            } else {
                $temp_email = (filter_var($temp_email, FILTER_VALIDATE_EMAIL));

                if (!$temp_email) {
                    $error_email = "El email no es valido";
                } else {
                    $email =$temp_email;
                }

                
            }
            //Validacion de fecha
            if (empty($temp_fecha)) {
                $error_fecha = "La fecha es obligatorio";
            } else {
                $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19)(20)[0-9]{2}$/";

                if (!preg_match($pattern, $temp_fecha)) {
                    $error_fecha = "El formato de fecha no es correcto(dd/mm/yyyy)";
                } else {
                    $fecha = $temp_fecha;
                }
            }

            if (isset($nombre) && isset($apellidos) && isset($dni) && isset($email) && isset($fecha)) {
                echo "<p>$nombre</p>";
                echo "<p>$apellidos</p>";
                echo "<p>$dni</p>";
                echo "<p>$email</p>";
                echo "<p>$fecha</p>";
            }
        }




        

        function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    ?>
    <form action="" method="post">
        <p>Nombre:
            <input type="text" name="nombre">
            <span class="error">
                * <?php
                    if (isset($error_nombre)) echo $error_nombre
                    ?>
            </span>
        </p>
        <p>Apellidos:
            <input type="text" name="apellidos">
            <span class="error">
                * <?php
                    if (isset($error_apellidos)) echo $error_apellidos
                    ?>
            </span>
        </p>
        <p>DNI
            <input type="text" name="dni">
            <span class="error">
                * <?php
                    if (isset($error_dni)) echo $error_dni
                    ?>
            </span>
        </p>
        <p>Email
            <input type="text" name="email">
            <span class="error">
                * <?php
                    if (isset($error_email)) echo $error_email
                    ?>
            </span>
        </p>
        <p>Fecha
            <input type="text" name="fecha">
            <span class="error">
                * <?php
                    if (isset($error_fecha)) echo $error_fecha
                    ?>
            </span>
        </p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>

</html>