<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("location: http://localhost/06_base_de_datos/tienda_ropa/public/inicio_sesion.php");
    }
?>