<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio.prueba.php" method ="post">
    <label>Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        echo $_POST["numero"];
    }
    ?>
</body>
</html>