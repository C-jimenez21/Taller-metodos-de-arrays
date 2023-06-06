<?php
    $aliens = array("Dríades", "Frightener", "Dragón", "Estrige", "Doppler", "Djinn", "Doppler", "Bátore", "Dríades", "Frightener", "Doppler", "Dríades" );
    echo "<h3>Array de alienigenas con duplicados</h3>";
    echo "<pre>";
    print_r($aliens);
    echo "</pre>";
    
    echo "<h3>Array de alienigenas unicos</h3>";
    echo "<pre>";
    print_r(array_unique($aliens));
    echo "</pre>";
   
?>

    