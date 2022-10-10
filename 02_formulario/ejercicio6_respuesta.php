<?php
$numero1 =$_POST["numero1"];
$factorial=1;
for($i=1;$i<=$numero1;$i++){
    $factorial=$factorial * $i;
}
echo "<p>El factorial de $numero1 es $factorial</p>";
?>