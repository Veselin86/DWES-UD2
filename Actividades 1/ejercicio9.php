<?php

    $precio = 50;
    $unidades = 2;
    define("IVA", 0.21);
    
    echo "Precio del producto: $precio" . "€<br>";
    echo "Unidades adquiridas: $unidades" ." unds.<br>";
    echo "Importe base de la factura: " . $precio * $unidades . "€<br>";
    echo "Importe del IVA: " . ($precio * $unidades) * IVA . "€<br>";
    echo "Importe final de la factura: " . (($precio * $unidades) * IVA) + ($precio * $unidades) . "€<br>";

?>