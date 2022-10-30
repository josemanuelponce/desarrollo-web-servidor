<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>practica_2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Practica 2</h1>
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
                    $ban1 = "hola";
                    $ban2 = "adios";
                    $ban3 = "buenas";
                    if (empty($temp_correo)) {
                        $error_correo = "El correo es obligatorio";
                    } else {
                        $temp_correo = filter_var($temp_correo, FILTER_VALIDATE_EMAIL);

                        if (!$temp_correo) {
                            $error_correo = "El email no es válido";
                        } else {
                            if (str_contains($temp_correo, $ban1)) {
                                $error_correo = "Palabra no permitida";
                            } else {
                                if (str_contains($temp_correo, $ban2)) {
                                    $error_correo = "Palabra no permitida";
                                }else{
                                    if (str_contains($temp_correo, $ban3)) {
                                        $error_correo = "Palabra no permitida";
                                    }else {
                                        $correo = $temp_correo;
                                    }
                                }
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
                    <div>
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                        <span class="error">
                            * <?php if (isset($error_nombre)) echo $error_nombre ?>
                        </span>
                        <br><br>
                    </div>
                    <div>
                        <label class="form-label">Primer Apellido</label>
                        <input class="form-control" type="text" name="primerA">
                        <span class="error">
                            * <?php if (isset($error_primerA)) echo $error_primerA ?>
                        </span>
                        <br><br>
                    </div>
                    <div>
                        <label class="form-label">Segundo Apellido</label>
                        <input class="form-control" type="text" name="segundoA">
                        <span class="error">
                            * <?php if (isset($error_segundoA)) echo $error_segundoA ?>
                        </span>
                        <br><br>
                    </div>
                    <div>
                        <label class="form-label">Dni</label>
                        <input class="form-control" type="text" name="dni">
                        <span class="error">
                            * <?php if (isset($error_dni)) echo $error_dni ?>
                        </span>
                        <br><br>
                    </div>
                    <div>
                        <label class="form-label">Edad</label>
                        <input class="form-control" type="number" name="edad">
                        <span class="error">
                            * <?php if (isset($error_edad)) echo $error_edad ?>
                        </span>
                        <br><br>
                        </div>
                    <div>
                        <label class="form-label">Correo</label>
                        <input class="form-control" type="text" name="correo" placeholder="example@hotmail.com">
                        <span class="error">
                            * <?php if (isset($error_correo)) echo $error_correo ?>
                        </span>
                        <br><br>
                    </div>
                        <button type="submit" class="btn btn-primary">Enviar</button><br><br>
                        

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>