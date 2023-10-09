<?php

    echo "<h2>Ejercicio 10<br></h2>";

    $datos_hoteles = array (

        array ("nombre" => "Abashiri (NH)", "cat" => "3*", "hab" => 168, "poblacion" => "46013 Valencia", "direccion" => "Avenida Ausias March, 59"),
        array ("nombre" => "Abba Acteon (Abba Hoteles", "cat" => "4*", "hab" => 189, "poblacion" => "46023 Valencia", "direccion" => "Escultor Vicente Betran Grimal, 2"),
        array ("nombre" => "Acta Atarazanas", "cat" => "4*", "hab" => 42, "poblacion" => "46011 Valencia", "direccion" => "Plaza Tribunal de las Aguas, 4"),
        array ("nombre" => "Acta del Carmen", "cat" => "3*", "hab" => 25, "poblacion" => "46003 Valencia", "direccion" => "Blanquerias, 11"),
        array ("nombre" => "AC Valencia (AC Hotels)", "cat" => "4*", "hab" => 183, "poblacion" => "46023 Valencia", "direccion" => "Avenida de Francia, 67"),
        array ("nombre" => "Ad Hoc Monumental Valencia", "cat" => "3*", "hab" => 28, "poblacion" => "46003 Valencia", "direccion" => "Boix, 4"),
        array ("nombre" => "Alkazar", "cat" => "1*", "hab" => 18, "poblacion" => "46002 Valencia", "direccion" => "Mosén Femades, 11")   

    );

    function listado($datos_hoteles) {
        echo "<h3>Listado de hoteles:</h3>";
        foreach ($datos_hoteles as $lista) {
            echo $lista["nombre"] . "<br>";
        }
    };

    function mas_de_100_hab($datos_hoteles) {
        echo "<h3>Listado de hoteles con mas de 100 habitaciones:</h3>";
        foreach ($datos_hoteles as $lista) {
            if ($lista["hab"] > 100) {
                echo $lista["nombre"] . "<br>";
            }
        }
    };

    function mas_de_100_hab_y_3($datos_hoteles) {
        echo "<h3>Listado de hoteles con mas de 100 habitaciones y 3 estrellas:</h3>";
        foreach ($datos_hoteles as $lista) {
            if ($lista["hab"] > 100 && $lista["cat"] == "3*") {
                echo $lista["nombre"] . "<br>";
            }
        }
    };

    function borrar_hotel_acta($datos_hoteles) {
        echo "<h3>Borrar hotel Acta del Carmen y mostrar listado de hoteles:</h3>";
        unset ($datos_hoteles[3]);
        foreach ($datos_hoteles as $lista) {
            echo $lista["nombre"] . "<br>";
        }
    };

    function borrar_todos_hoteles($datos_hoteles) {
        echo "<h3>Borrar todos los hoteles y muestra del mensaje:</h3>";
        foreach ($datos_hoteles as $clave => $valor) {
            unset ($datos_hoteles[$clave]);
        }
        if (empty($datos_hoteles)) {
            echo "No hay hoteles en la base de datos!<br>";
            print_r($datos_hoteles);
        }
    };

    function anadir($datos_hoteles) {
        echo "<h3>Añadir nuevos hoteles y mostrar el listado:</h3>";
        $datos_hoteles = array (
            array ("nombre" => "Astoria Palace (Ayre Fiesta)", "cat" => "4*", "hab" => 204, "poblacion" => "46002 Valencia", "direccion" => "Plaza Rodrigo Botet, 5"),
            array ("nombre" => "Balneario Las Arenas", "cat" => "lujo", "hab" => 253, "poblacion" => "46011 Valencia", "direccion" => "Eugenia Viñes, 22-24")
        );
        foreach ($datos_hoteles as $lista) {
            echo $lista["nombre"] . "<br>";
        }            
    };

    print_r($datos_hoteles);
    echo listado($datos_hoteles);
    echo mas_de_100_hab($datos_hoteles);
    echo mas_de_100_hab_y_3($datos_hoteles);
    echo borrar_hotel_acta($datos_hoteles);
    echo borrar_todos_hoteles($datos_hoteles);
    echo anadir($datos_hoteles);

?>