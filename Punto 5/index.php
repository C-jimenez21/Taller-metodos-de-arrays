<?php
    $naves = array(
        "apolo11" => 320,
        "apolo13" => 931,
        "apolo18" => 452,
        "falcon9" => 550
    );

    function Sumar($acum, $elem){
        return $acum += $elem;
    }


    echo "<h3>Estas son las naves espaciales con sus pesos en toneladas</h3>";
    echo "<pre>";
    print_r($naves);
    echo "</pre>";

    echo "<h3>Esta es la suma del peso de las naves espaciales</h3>";
    var_dump(array_reduce($naves, "Sumar"));


    
?>