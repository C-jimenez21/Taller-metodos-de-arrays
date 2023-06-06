<?php
    echo <<<HTML
        <a href="index.html" target="_parent">Volver</a>
        <hr>    
    HTML;
    
   $planetas = array("Sol","Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno");
   $indice = array_rand($planetas, 1);

    echo("<h3>la mision esta dirigida hacia el planeta <i>{$planetas[$indice]}</i> del sistema solar</h3>");
   

?>