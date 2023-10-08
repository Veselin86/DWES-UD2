<?php

    echo "<h2>Ejercicio 6<br></h2>";

    $numeros = [1, 4, -4, 5, -2, -9, 0, 3, -2];

    for ($i=0; $i < sizeof($numeros); $i++) { 
        if ($numeros[$i] > 0) {
            echo "El numero $numeros[$i] es positivo<br>";
        } else if ($numeros[$i] < 0) {
            echo "El numero $numeros[$i] es negativo<br>";
        } else {
            echo "Hemos llegado al 0";
            break;
        }
    }

?>