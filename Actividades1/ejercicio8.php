<?php

    define ("LIMITE", 100);
    
    $aleatorio = rand(1, LIMITE);
    
    echo $aleatorio % 2 == 0 ?  "El numero $aleatorio es par" : "El numero $aleatorio es impar";
    
?>