<?php

    echo "<h2>Ejercicio 6<br></h2>";

    $numeros = [1, 4, 4, 5, 2, 9, 0, -3, 2];
    $media = 0;

    for ($i=0; $i < sizeof($numeros); $i++) { 
        if ($numeros[$i] >= 0) {
            $media += $numeros[$i];
            echo "El numero $numeros[$i] es positivo y se suma a la media: $media <br>";
        } else {
            echo "El numero $numeros[$i] es negativo!<br>Media: $media <br>";
            break;
        }
    }

?>