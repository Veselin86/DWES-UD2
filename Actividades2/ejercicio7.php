<?php

    echo "<h2>Ejercicio 7<br></h2>";

    $numeros = [1, 4, -4, 5, 0, -9, 0, 3, -2, 8];
    $positivos = 0;
    $negativos = 0;
    $ceros = 0;

    echo "Los numeros del array son: ";

    for ($i=0; $i < sizeof($numeros); $i++) { 
        if ($numeros[$i] > 0) {
            $positivos += $numeros[$i];
        } else if ($numeros[$i] < 0) {
            $negativos += $numeros[$i];
        } else {
            $ceros ++;
        } 
        echo "$numeros[$i], "; 
    }
    
    echo "<br>La media de los positivos: $positivos<br>";
    echo "La media de los negativos: $negativos<br>";
    echo "El total de los ceros es: $ceros<br>";

?>