<?php
    echo "<h2>Ejercicio 9<br></h2>";

    $gestion_facturas = array (
        array (1, 60, 10),
        array (2, 4, 3),
        array (3, 35, 20),
        array (4, 80, 25),
        array (5, 7, 15)
    );

    $total = 0;
    $superior600 = 0;

    foreach ($gestion_facturas as $factura) {
        $importe = $factura[1] * $factura[2];
        if ($importe >= 600) {
            $superior600++;
        }
        $total += $importe;
    }

    echo "Importe total de las facturas: $total €<br>";
    echo "Cantida en litros vendidos del articulo 1: " . $gestion_facturas[0][1] . "<br>";
    echo "Facturas emitidas de más de 600 €: " . $superior600;

?>