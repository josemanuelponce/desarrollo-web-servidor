<h1>Estructura while</h1>

<ul>
    <?php
    $i = 1;
    while($i <= 10) {
        echo "<li>$i</li>";
        $i++;
    }

    $i = 10;
    while($i < 100) {
        if ($i % 3 ==0 && $i % 5 ==0) {
        echo "<li>$i</li>";
        }
        $i++;


    }
    ?>
</ul>