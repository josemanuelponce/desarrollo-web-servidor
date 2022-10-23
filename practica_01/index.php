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
    <div>
        <h2 id="ej1">Ejercicio 1</h2>
        <p>
            Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”. El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. Ej.: Si a=3 y b=4, se devolverán los tres primeros números primos empezando por 4. Es decir, 5, 7 y 11
        </p>
        <form action="#ej1" method="post">
            <label>Numero 1</label><br>
            <input type="text" name="a"><br><br>
            <label>Numero 2</label><br>
            <input type="text" name="b"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
         if(isset($_POST['a']) && isset($_POST['b'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $cont = 0;
            $num = $b;
            while($cont < $a){
                $div = 0;
                for($i = 1; $i <= $num; $i++){
                    if($num % $i == 0){
                        $div++;
                    }
                }
                if($div == 2){
                    echo $num . "<br>";
                    $cont++;
                }
                $num++;
            }
        }
        ?>
    </div>
    <div>
        <h2 id="ej2">Ejercicio 2</h2>
        <p>
            Crea un formulario que compruebe si un DNI es válido. Un DNI es válido si:
            Está formado por 8 dígitos seguidos de una letra (mayúscula o minúscula)
            La letra es válida (debes de investigar cómo averiguar si la letra es válida)
            No usar expresiones regulares
        </p>
        <form action="#ej2" method="post">
            <label>Dni</label><br>
            <input type="text" name="dni"><br><br>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej2") {
                $dni = $_POST["dni"];
                echo "<p>$dni</p>";
            }
        
        $letras = strtoupper(substr($dni, -1));
        $dni = substr($dni, 0, -1);
       
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni%23, 1) == $letras && strlen($letras) == 1 &&  strlen($dni) == 8) {
            echo 'Este DNI es valido';
        } else {
            echo 'Este DNI no es valido';
        }
}
        ?>
    </div>
    <div>
        <h2 id="ej3">Ejercicio 3</h2>
        <p>
            Genera de manera dinámica las tablas de multiplicar del 1 al 10. El resultado debe ser parecido al siguiente y estar estructurado mediante tablas HTML
        </p>
        <?php
        $multiplicando;
        $multiplicador;

        echo "<table text-align:center; border=5>";
        echo "<tr>";
        for ($tabla = 1; $tabla <= 10; $tabla++) {
            echo "<td>Tabla del $tabla </td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
            for ($multiplicando = 01; $multiplicando <= 10; $multiplicando++) {
                echo "<td>$multiplicando X $multiplicador =";
                echo ($multiplicando * $multiplicador);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>