<?php

$naves = array("Apolo 11","Apolo 13","Apolo 18", "Falcon 9", "Falcon heavy", "Falcon 1","Atlas V500","Altlas Delta"
);

$select = $_POST["naves"];

if(in_array($select,$naves)){
    echo "<h3> la nave {$select} si se encuentra en el presente en la flota</h3>";
}else{
    echo "<h3>Lamentablemente la nave {$select} no se encuentra en el presente en la flota </h3>";
}
echo "<h4>Recuerde que estos son los naves del presente en la flota: </h4>";


echo "<pre>";
print_r($naves);
echo "</pre>";

echo <<<HTML
<hr>
<a href="index.html" target="_parent">Volver</a>
HTML;
?>