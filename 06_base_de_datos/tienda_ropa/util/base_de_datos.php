<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'prendas';

$conexion = new mysqli($servidor,$usuario,$contrasena,$base_de_datos)
or die("Error en la conexion");
?>