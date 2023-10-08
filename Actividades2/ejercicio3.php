<?php

    echo "<h2>Ejercicio 3<br></h2>";

    $a = 0;
    $i = 1;

    do {
        if ($i % 2 == 0) {
            echo $i . "<br>";
            $a++;
        }
        $i++;
    } while ($a <= 4);

    $cant = 0;

    for ($i=1; $cant < 5; $i++) { 
        if ($i % 2 == 0) {
            echo $i . "<br>";
            $cant++;
        }
    }

?>