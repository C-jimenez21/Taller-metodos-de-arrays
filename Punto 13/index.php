<?php
    $planetas = array("Sol","Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno");
    echo "<pre>";
    echo "Array de planetas normal -> ";
    print_r($planetas);
    echo"</pre>";

    echo "<pre>";
    echo "Array de planetas revertido -> ";
    print_r(array_reverse($planetas));
    echo"</pre>";

?>