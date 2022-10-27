<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php








    //Videojuego
    $videojuegos = array(
        "juego1" => "Cyberpunk 2077",
        "juego2" => "Minecraft",
        "juego3" => "My little piny"
    );
    print_r($videojuegos);
    //Consolas
    $consolas = [
        "consola1" => "PS4",
        "consola2" => "PS5",
        "consola3" => "PS3"
    ];
    print_r($consolas);

    $personas = [
        "26812688n"  =>  "Pedro",
        "74657688p"  => "Juan",
        "12345678L"  => "Manué"
    ];

    echo "<br><br>";
    print_r($personas);

    $personas["12345678D"] = "Rodolfo";
    $personas["87654321A"] = "Ruperto";
    unset($personas["26812688n"]);
    print_r($personas);


    $series = [
        'El juego del calamar',
        'La casa de papel',
        'Alice in borderland',
        'The witcher'
    ];
    //Inserta elementos al final del array
    array_push($series, "Cuentame", "Dark");
    $series[] = "Big bag theory";
    $series[10] = "La que se avecina";
    $series = array_values($series);
    //Eliminar
    unset($series[10]);
    //Imprimir
    print_r($series);
    echo "<br><br>";

    /*foreach ($series as $key => $serie) {
        echo $indice . "=>" . $serie . "<br>";
    }*/
    ?>

    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Dni</th>";
    echo "<th>Nombre</th>";
    echo "</tr>";


    foreach ($personas as $dni => $nombre) {
        echo "<tr>";
        echo "<td>$dni</td>";
        echo "<td>$nombre</td>";
        echo "</tr>";
    }
    echo "</table>";




    //Bucle for para las series
    ?>


    <ul>
        <?php
        for ($i = 0; $i < count($series); $i++) {
        ?>
            <li><?php echo $series[$i] ?></li>
        <?php
        }
        ?>
    </ul>

    <ul>
        <?php
        $i = 0;
        /* while ($i <count ($series)){
        ?>
        <li><?php echo $series[$i]?></li>
    }*/

        ?>

    </ul>

    <?php
    

    $frutas_1 = ["Melocoton", "Sandia", "Kiwi"];

    $frutas_2 = ["Sandia", "Melocoton", "Kiwi"];
    if ($frutas_1 == $frutas_2) {
        if ($frutas_1 === $frutas_2) {
            echo "<p>Las frutas son las mismas y estan igual ordenadas</p>";
        }else {
            echo "<p>Las frutas no son las mismas o no estan igual ordenadas</p>";
        }
    }else {
        echo "<p>Los arrays no tienen los mismos elementos</p>";
    }
    
    



?>












</body>

</html>