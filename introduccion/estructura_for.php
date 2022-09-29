<h1>Estructura For</h1>
<ul>
<?php
    /*for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i</li>";
    }

    for ($i = 5; $i <= 50; $i++) {
        if ($i % 5 == 0) {
        echo "<li>$i</li>";
    }

}*/

$a = rand(1,10);
$b = rand(11,20);
echo $a;
echo $b;

for($i = $a; $i <= $b; $i++) {
    echo"<li>$i</li>"
}

?>
</ul>