<?php
    // $planets = [
    //     "Sol" => 274,
    //     "Mercurio" => 3.72,
    //     "Venus" => 8.82,
    //     "Tierra" => 9.81,
    //     "Marte" => 3.72,
    //     "Jupiter" => 23.13,
    //     "Saturno" => 9.01,
    //     "Urano" => 8.72,
    //     "Neptuno" => 10.97, 
    // ];

    //fracciones de gravedad de los planetas con respecto a la tierra
    $planets = [
        "Sol" => 27.93,
        "Mercurio" => 0.38,
        "Venus" => 0.899,
        "Tierra" => 1,
        "Marte" => 0.38,
        "Jupiter" => 2.358,
        "Saturno" => 0.92,
        "Urano" => 0.889,
        "Neptuno" => 1.118, 
    ];
    function calc($p1){
        return $p1*9.81;
    }
    echo "<h3>Fracciones de gravedad de los planetas con respecto a la tierra</h3>";
    echo "<pre>";
    print_r($planets);
    echo "</pre>";

    echo "<h3>Calculo de la gravedad aproximada de los planetas</h3>";
    echo "<pre>";
    print_r(array_map("calc",$planets));
    echo "</pre>";

?>