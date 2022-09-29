<h1>Estructura IF</h1>

<?php
    $numero = 6;

    if($numero>0) {
        echo"<p>El numero es positivo</p>";
    }else if ($numero<0){
        echo"<p>El numero es negativo</p>";
    }else {
        echo"<p>El numero es 0</p>";
    }

    if($numero % 2 == 0){
        echo"<p>El numero es par</p>";
    }else{
        echo"<p>El numero es impar</p>";
    }
    /*
Crear una variable $alumno y una variable $nota
Mostrar por pantalla el nombre del alumno junto
a su calificación. Su calificación será:
- Suspenso si es menor que 5
- Aprobado si está entre 5 y 6
- Notable si está entre 7 y 8
- Sobresaliente si está entre 9 y 10
*/
    $alumno = "Jose";
    $nota = 7;

    if($nota>=0 && $nota<5) {
        echo"<p>El numero es suspenso</p>";
    }else if ($nota>=5 && $nota<7){
        echo"<p>El numero es aprobado</p>";
    }else if ($nota>=7 && $nota<9){
        echo"<p>El numero es notable</p>";
    }else if ($nota>=9 && $nota<=10){ 
        echo"<p>El numero es sobresaliente</p>";
    }else {
        echo "<p>La nota no es valida</p>";
    }

    $usuario = "admin";
    $contrasena = 123;

    if($usuario=true && $contrasena=true) {
        echo"<p>Sesion iniciada</p>";
    }else if ($usuario=true && $contrasena=false){
        echo"<p>contraseña no valida</p>";
    }else if ($usuario=false && $contrasena=true){
        echo"<p>usuario no valida</p>";
    }else {
        echo "<p>La nota no es valida</p>";
    }
    




?>