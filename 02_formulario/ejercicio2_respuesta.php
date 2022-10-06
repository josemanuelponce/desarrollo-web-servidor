<h1>Respuesta al formulario</h1>
<ul>
<?php
$numero=$_POST["numero"];
for ($i = 1; $i<=$numero;$i++) {

echo "<li>$i</li>";

}
?>
</ul>