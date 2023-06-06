<?php
   $planetas1 = array("Venus","Sol","Tierra","Jupiter","Saturno","Urano","Neptuno", "Pluton", "GJ 3323 b");
   $planetas2 = array("Sol","Mercurio","Tierra","Marte","Saturno","Urano", "KOI-4878.01", "GJ 3323 b");
    echo "<h3>Planeta 1</h3>";
    echo "<pre>";
    print_r($planetas1);
    echo "</pre>";

    echo "<h3>Planeta 2</h3>";
    echo "<pre>";
    print_r($planetas2);
    echo "</pre>";

    echo "<h3>Planetas unicos del planeta 1</h3>";
    echo "<pre>";
    print_r(array_diff($planetas1, $planetas2));
    echo "</pre>";

    echo "<h3>Planetas unicos del planeta 2</h3>";
    echo "<pre>";
    print_r(array_diff($planetas2, $planetas1));
    echo "</pre>";
?>