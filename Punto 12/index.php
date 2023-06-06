<?php
    echo <<<HTML
        <a href="index.html" target="_parent">Volver</a>
        <hr>    
    HTML;
    $planetas = array(
        "Sol" => array(),
        "Mercurio" => array(),
        "Venus" => array(),
        "Tierra" => array("Luna"),
        "Marte" => array("Fobos", "Decimos"),
        "Jupiter" => array("Ganimedes" ,"Calisto", "Ío", "Europa"),
        "Saturno" => array("Titán", "Encélado" , "Mimas" , "Dione" ,"Jápeto"),
        "Urano" => array("Cordelia" , "Ofelia", "Bianca"),
        "Neptuno" => array("Tritón ", "Talasa")
      );
    $planet = $_POST["Planetas"];
    $astro = $_POST["satelite"];
    array_push($planetas[$planet], $astro) ;

    echo "<pre>";
    echo "Los satelites de {$planet} son: ";
    print_r($planetas[$planet]);
    echo"</pre>";



    
?>