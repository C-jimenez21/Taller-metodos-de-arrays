<?php
$numPlanets =(int)($_POST["numPlanets"]);
echo <<< HTML
    <a href="index.html" target="_parent">Volver</a>
HTML;
echo "<h3>La cantidad de planetas creados son: {$numPlanets}</h3>";
echo "El estado del sistema solar es: ";
echo "<pre>";
print_r(array_fill(0, $numPlanets, "Deshabitado"));
echo "</pre>";
?>