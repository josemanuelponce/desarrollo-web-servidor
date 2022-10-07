<h1>Ejercicio3</h1>

<?php
$nombre=$_POST["nombre"];
$numero=(int)$_POST["edad"];
$numero = ucwords(strtolower($nombre));
if($numero >=0 && $numero<18) {
    echo "Eres menor de edad";
}else if($numero>=18 && $numero<=65) {
    echo "Eres adulto";
}else if ($numero>65 && $numero<138){
    echo "Eres jubilado";
}else {
    echo "edad no valida";
}

?>
