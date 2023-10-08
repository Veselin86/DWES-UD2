<?php

    $numero1 = '2';
    $numero2 = '2';

    switch ($numero1 <=> $numero2) {
        case '-1':
            echo $numero2;
            break;
        case '0':
            echo "Los numeros son iguales";
            break;
        case '1':
            echo $numero1;
            break;
    }

?>