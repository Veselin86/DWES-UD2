<?php

    echo "<h2>Ejercicio 2<br></h2>";

    for ($i = 0; $i <= 100; $i += 5) {
        echo $i . "<br>";
    }

    $a = 0;

    do {
        if ($a % 5 == 0 ){
            echo $a . "<br>";
        }
        $a += 5;
    } while ($a <= 100);

?>