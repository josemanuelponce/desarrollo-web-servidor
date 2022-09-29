<h1>Estructura Switch</h1>

<?php
    $numero = rand(1,3);
    echo "<p> el numero es$numero</p>";

    switch($numero) {
        case 1:
            echo "<p>$numero es igual a 1</p>";
            break;
        case 2:
            echo "<p>$numero es igual a 2</p>";
            break;
        case 3:
            echo "<p>$numero es igual a 3</p>";
            break;
    }

    $alumno = "Jose";
    $nota = 7;

    switch($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "<p>suspenso</p>";
        break;
    case 5:
    case 6:
        echo "<p>aprobado</p>";
        break;
    case 7:
    case 8:
        echo "<p>notable</p>";
        break;
    case 9:
    case 10:
        echo "<p>sobresaliente</p>";
        break;
    default:
    echo "<p>no valido</p>";
    break;

    }


?>