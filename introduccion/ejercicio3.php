<h1>Ejercicio 3</h1>

<?php
    echo date("H:i a");
    echo "<br>";
    echo date(" j / m / Y");
    echo "<br>";
    echo date ("l");
    echo "<br>";
    

    
    $day = date("l");
    switch($day) {
        case "Sunday":
            echo"Hoy es domingo";
        break;
        case "Monday":
            echo"Hoy es Lunes";
        break;
        case "Tuesday":
            echo"Hoy es Martes";
        break;
        case "Wednesday":
            echo"Hoy es Miercoles";
        break;
        case "Thursday":
            echo"Hoy es Jueves ";
        break;
        case "Friday":
            echo"Hoy es Viernes";
        break;
        case "Saturday":
            echo"Hoy es Sabado";
        break;
    }
    

?>