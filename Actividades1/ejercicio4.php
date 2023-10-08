<?php

    $nombre = 'Veselin';
    $edad = '22';

    if ($nombre == NULL){
        echo "Hola desconocido";
    } else if($edad == NULL){
        echo "Hola $nombre. No se tu edad!";
    } else {
        echo "Hola $nombre, Tiene $edad años";
    }
    
?>