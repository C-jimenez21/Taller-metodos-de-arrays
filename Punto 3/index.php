<?php
echo "<h3>Estado de los planetas habitables</h3>";
$planets = [
    "Sol" => false,
    "Mercurio" => false,
    "Venus" => false,
    "Tierra" => true,
    "Marte" => true,
    "Jupiter" => false,
    "Saturno" => false,
    "Urano" => false,
    "Neptuno" => false, 
];

echo "<pre>";
var_dump($planets);
echo "</pre>";

// function ap($p1){
//    return $p1 == true;
// }

echo "<h3>Estado de los planetas habitables</h3>";
echo "<pre>";
var_dump(array_filter($planets, fn($p1) => $p1==true));
echo "</pre>";

?>