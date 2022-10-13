<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<style>
    p{
        width: 50%;
    }
</style>
<body>

<h1>Ejercicios de clase de formularios</h1>

<div>
    <h2 id="ej1">Ejercicio1</h2>
    <p>Formulario para poner tu nombre y edad</p>
    <form action="#ej1" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej1") {
                    $nombre = $_POST["nombre"];
                    $edad = $_POST["edad"];

                    echo "<p>$nombre</p>";
                    echo "<p>$edad</p>";
                }
            }
        ?>
</div>
<div>
    <h2 id="ej2">Ejercicio2</h2>
    <p>
        Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya indicado
    </p>
    <form action="#ej2" method="post">
    <label>Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="f" value="ej2">
    <input type="submit" value="Enviar">
    </form>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej2") {
                    $numero = $_POST["numero"];

                    echo "<p>Pusiste $numero</p>"; 
                }
            }
            $numero=$_POST["numero"];
            for ($i = 1; $i<=$numero;$i++) {

            echo "<li>$i</li>";
            }
        ?>
</div>
<div>
    <h2 id="ej3">Ejercicio3</h2>
    <p>
    Crear un formulario que reciba el nombre y la edad de una persona y
    muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
    a su edad. Además:
    - Convertir la edad a un número entero
    - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula
</p>
    <form action="#ej3" method="get">
    <label>Nombre</label><br>
    <input type="text" name="nombre"><br><br>
    <label>Edad</label><br>
    <input type="text" name="edad"><br><br>
    <input type="hidden" name="f" value="ej3">
    <input type="submit" value="Enviar">
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["f"] == "ej3") {
                    $nombre = $_GET["nombre"];
                    $edad = $_GET["edad"];

                    echo "<p>$nombre</p>";
                    echo "<p>$edad</p>";
                }
            }
            $nombre = $_GET["nombre"];
            $edad = (int)$_GET["edad"];
            $nombre = ucwords(strtolower($nombre));

            if ($edad < 18 && $edad >= 0) {
                echo "<p>$nombre es menor edad</p>";
            } else if ($edad >= 18 && $edad <= 65) {
                echo "<p>$nombre es adulto</p>";
            } else if ($edad > 65 && $edad < 130) {
                echo "<p>$nombre se ha jubilado</p>";
            } else {
                echo "<p>La edad no es válida</p>";
            }
    ?>
</div>
<div>
    <h2 id="ej4">Ejercicio4</h2>
    <p>
    Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase en un encabezado de dicho número. Si introducimos "5" y "Hola mundo" se mostrará un encabezado h5-Hola mundo-/h5
    </p>
    <form action="#ej4" method="get">
        <label>Frase</label><br>
        <input type="text" name="frase"><br><br>
        <label>Encabezado</label><br>
        <input type="text" name="encabezado"><br><br>
        <input type="hidden" name="f" value="ej4">
        <input type="submit" value="Enviar">
    </form>
<?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["f"] == "ej4") {
                    $frase = $_GET["frase"];
                    $e = $_GET["encabezado"];

                   
                }
            }
            $frase = $_GET["frase"];
            $e = $_GET["encabezado"];
            
            echo "<h" . $e . ">" . $frase . "</h" . $e . ">";
?>

    
</div>
<div>
    <h2 id="ej5">Ejercicio 5</h2>
    <p>
    Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo
    </p>
    <form action="#ej5" method="get">
    <label>Numero 1</label><br>
    <input type="text" name="numero1"><br><br>
    <label>Numero 2</label><br>
    <input type="text" name="numero2"><br><br>
    <input type="hidden" name="f" value="ej5">
    <input type="submit" value="Enviar">
    </form>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["f"] == "ej5") {
                    $numero1 = $_GET["numero1"];
                    $numero2 = $_GET["numero2"];

                   
                }
            }
            $numero1 = $_GET["numero1"];
            $numero2 = $_GET["numero2"];
            $res =1;
            if($exponente < 0){
                echo "<p>El exponente debe ser positivo</p>";
            }else{
                for ($i=1; $i <=$numero2; $i++) {
                $res =$res*$numero1;
            }
            }


echo "<p>El resultado es $res</p>";
           
?>

    
</div>
<div>
    <h2 id="ej6">Ejercicio 6</h2>
    <p>
    Formulario que reciba un numero y devuelva su factorial<br>
    </p>
    <form action="#ej6" method="get">
    <label>Numero 1</label><br>
    <input type="text" name="numero1"><br><br>
    <input type="hidden" name="f" value="ej6">
    <input type="submit" value="Enviar">
    </form>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["f"] == "ej6") {
                    $numero1 = $_GET["numero1"];
                    

                   
                }
            }
            $numero1 = $_GET["numero1"];
            $factorial=1;
            if ($numero1 >=1) {
                for($i=1;$i<=$numero1;$i++){
                $factorial=$factorial * $i;
            }
            echo "<p>El factorial de $numero1 es $factorial</p>";
            }else {
                echo "<p>El numero debe ser igual o mayor  que 1</p>";
            }
           
?>
</div>
<div>
    <h2>ejercicio_prueba</h2>
    <p>
    Hacer ejercicio de prueba
    </p>
    <form action="" method ="get">
    <label>Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="f" value="prueba">
    <input type="submit" value="Enviar">
    </form>
    <?php
            if ($_SERVER["REQUEST_METHOD"]=="GET") {
                echo $_GET["numero"];
            }
           
    ?>

</div>
<div>
    <h2>Ejercicio 7</h2>
    <p>
    Hacer ejercicio 7
    </p>
    <form action="" method="get">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Consola</label><br>
        <select name="consola">
            <option value="ps4">PS4</option>
            <option value="ps5">PS5</option>
            <option value="switch">Switch</option>
        </select><br><br>
        <label>¿Edición especial?</label><br>
        <input type="checkbox" name="especial" value="si"><br><br>
        <input type="hidden" name="f" value="ej7">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nombre = $_GET["nombre"];
            $consola = $_GET["consola"];
            $especial = "";
            if (isset($_GET["especial"])) {
                $especial = $_GET["especial"];
            }
            
            $precio = 0;

            //  Comprobamos la consola
            if ($consola == "ps4") {
                $precio = 60;
            } else if ($consola == "ps5") {
                $precio = 70;
            } else if ($consola == "switch") {
                $precio = 40;
            }

            //  Comprobamos si es edición especial
            if ($especial == "si") {
                $precio *= 1.25;
            }

            echo "<h3>El videojuego $nombre vale $precio</h3>";
        }
    ?>
</div>
<div>
    <h2>Ejercicio 7 parte 2</h2>
    <p>
        Hacer ejercicio 7 parte 2
    </p>
    <form action="" method="get">
        <label>Número</label><br>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="f_numero">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if ($_GET["f"] == "f_numero") {
                echo "<p>Estoy en $numero</p>";
            }
        }
    ?>
    <br><br>
    <form action="" method="get">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <input type="hidden" name="f" value="f_nombre">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if ($_GET["f"] == "f_nombre") {
                echo "<p>Estoy en $nombre</p>";
            }
        }
    ?>
</div>
</body>
</html>
