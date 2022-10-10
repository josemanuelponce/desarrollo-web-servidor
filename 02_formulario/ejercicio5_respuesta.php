<?php
$numero1 =$_POST["numero1"];
$numero2 =$_POST["numero2"];
$res =1;
for ($i=1; $i <=$numero2; $i++) {
    $res =$res*$numero1;
}

echo "<p>El resultado es $res</p>";
?>