<?php
$servidor = 'localhost';
$usuario = 'jose';
$contrasena = 'admin';
$base_de_datos = 'db_tienda_de_ropa';

$conexion = new mysqli($servidor,$usuario,$contrasena,$base_de_datos)
or die("Error en la conexion");
?>