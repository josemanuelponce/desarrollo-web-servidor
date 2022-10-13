<form action="ejercicio2.php" method="get">
        <label>Dni</label>
        <input type="text" name="dni"><br><br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="enviar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$dni=$_GET["dni"];
echo "<p>$dni</p>";
}
?>