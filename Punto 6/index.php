<?php

$planetas = array("Sol","Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno");

$select = $_POST["planetas"];

if(in_array($select,$planetas)){
    echo "<h3>El planeta {$select} si se encuentra en el sistema solar</h3>";
}else{
    echo "<h3>Lamentablemente el planeta {$select} no se encuentra en el sistema solar </h3>";
}
echo "<h4>Recuerde que estos son los planetas del sistema solar: </h4>";


echo "<pre>";
print_r($planetas);
echo "</pre>";

echo <<<HTML
<hr>
<a href="index.html" target="_parent">Volver</a>
HTML;
?>