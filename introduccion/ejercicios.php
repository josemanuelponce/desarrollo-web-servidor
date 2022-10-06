<h1>Ejercicios</h1>


<ul>
<?php
    echo "<p>Esto funciona</p>";


$a = rand(1,10);
echo $a;

while($a <= 10) {
    if($a % 2 == 0) {
        echo"<p>Es primo</p>";
        
    }else {
        echo"<p>Es impar</p>";
        
    
    }

    echo "<li>$a</li>";
    $a++;
} 
?>
</ul>

<?php

echo "[";
for ($i = 3; $i <=30;$i=+3) {
    if($i<30) {
        echo "$i,";
    }else{
        echo "$i";
    }
    
}
echo "]";

?>




