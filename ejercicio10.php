<?php

    $codigo = 1;
    $nombre = 'Tom';
    $apellidos = 'Smith';
    $puesto = 'Vendedor';
    $sueldo = 75000;
    $edad = 26;
    $num_hijos = 0;
    $sucursal = 'New York';

    if ($puesto === 'Vendedor' && $sueldo > 70000) {
        echo "Retencion 1: <br>" . $sueldo * 0.1;
    } else if ($puesto === 'Vendedor' && $sueldo < 70000) {
        echo "Retencion 1: <br>" . $sueldo * 0.2;
    }
    
    if ($edad > 50 || $num_hijos > 2 ) {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.05;
    } else {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.12;
    }

    if ($sueldo > 50000 && $sueldo < 80000) {
        echo "<br>Retencion 3: <br>" . $sueldo * 0.05;
    } else {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.12;
    }
    
    if ($num_hijos == 1 || $num_hijos == 2) {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.10;
    } else {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.05;
    }
    
    if ($sueldo > 80000 || $num_hijos = 0) {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.15;
    } else {
        echo "<br>Retencion 2: <br>" . $sueldo * 0.05;
    }
    
?>