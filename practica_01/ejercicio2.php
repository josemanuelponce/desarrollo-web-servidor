<form action="ejercicio2.php" method="post">
        <label>Dni</label>
        <input type="text" name="dni"><br><br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="enviar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni=$_POST["dni"];
echo "<p>$dni</p>";
}
?>