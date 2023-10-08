<?php

    echo "<h2>Ejercicio 8<br></h2>";

    $alumnos = [15, 19, 18, 28, 17, 150, 180, 190, 170, 175];
    $edadMedia = 0;
    $estaturaMedia = 0;
    $mayores18 = 0;
    $altos175 = 0;

    for ($i=0; $i < sizeof($alumnos); $i++) { 
        if ($alumnos[$i] > 100) {
            $estaturaMedia += $alumnos[$i];
            if ($alumnos[$i] >= 175) {
                $altos175++;
            }
        } else {
            $edadMedia += $alumnos[$i];
            if ($alumnos[$i] >= 18) {
                $mayores18++;
            }
        }
    }

    echo "La edad media es " . $edadMedia / 5 . " y $mayores18 son mayores de 18 años.<br>";
    echo "La altura media es " . $estaturaMedia / 5 . " y $altos175 miden mas de 1.75.<br>";

?>