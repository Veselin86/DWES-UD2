<?php

    $nomina = '700';

    if ($nomina < 800) {
        echo $nomina*1.2 . ' €';
    } else if (800 <= $nomina  && $nomina <= 1200) {
        echo $nomina . ' €';
    } else {
        echo $nomina*0.85 . ' €';
    }

?>