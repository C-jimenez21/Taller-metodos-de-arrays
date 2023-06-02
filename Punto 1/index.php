<?php
//header("Content-type: application/json");
echo <<< HTML
    <a href="index.html" target="_parent">Volver</a>
HTML;

$planetas = array(
    "Sol" => 1,
    "Mercurio" => 2,
    "Venus" => 3,
    "Tierra" => 4,
    "Marte" => 5,
    "Jupiter" => 6,
    "Saturno" => 7,
    "Urano" => 8,
    "Neptuno" => 9
  );
  $peticion = $_POST["Planetas"];
  $respuesta = array_flip($planetas)[$peticion];
  /*echo "<pre>";
  echo $peticion;
  print_r($planetas);
  print_r(array_flip($planetas));
  echo "</pre>";
  */
  echo("<h1>{$respuesta}</h1>");

  
?>