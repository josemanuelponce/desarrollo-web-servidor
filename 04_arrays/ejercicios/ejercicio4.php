<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 4</h1>


    <?php
    $series = [
        ['the walking dead', 'hbo', 3],
        ['dora la esploradora', 'clan', 21],
        ['la patrulla cocaina', 'clan', 5],
        ['dos colgados boca abajo de un puente sin barrotes', 'amazon', 90],
        ['los barbapapas', 'tenerifeTV', 2]
    ];
    ?>
    <table border>
        <tr>
            <th>titulo: </th>
            <th>plataforma: </th>
            <th>temporadas: </th>
        </tr>

        <?php
        echo "<br><br>";
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
        ?>
            <tr>
                <td><?php echo  $titulo; ?></td>
                <td><?php echo  $plataforma; ?></td>
                <td><?php echo  $temporadas; ?></td>
            </tr>

        <?php
        }
        ?>



        <?php
        $temporadas = array_column($series, 2);
        array_multisort($temporadas, SORT_ASC, $series);
        ?>
        
        <table border>
            <tr>
                <th>titulo: </th>
                <th>plataforma: </th>
                <th>temporadas: </th>
            </tr>

            <?php
            echo "<br><br>";
            foreach ($series as $serie) {
                list($titulo, $plataforma, $temporadas) = $serie;
            ?>
                <tr>
                    <td><?php echo  $titulo; ?></td>
                    <td><?php echo  $plataforma; ?></td>
                    <td><?php echo  $temporadas; ?></td>
                </tr>

            <?php
            }
            ?>


<?php
        $plataforma = array_column($series, 1);
        $titulo = array_column($series,0);
        array_multisort($plataforma, SORT_ASC, $titulo, SORT_ASC, $series);
        ?>
        
        <table border>
            <tr>
                <th>titulo: </th>
                <th>plataforma: </th>
                <th>temporadas: </th>
            </tr>

            <?php
            echo "<br><br>";
            foreach ($series as $serie) {
                list($titulo, $plataforma, $temporadas) = $serie;
            ?>
                <tr>
                    <td><?php echo  $titulo; ?></td>
                    <td><?php echo  $plataforma; ?></td>
                    <td><?php echo  $temporadas; ?></td>
                </tr>

            <?php
            }
            ?>
</body>

</html>
