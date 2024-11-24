<?php
require_once "/opt/lampp/htdocs/Programacion/Basico/Digimon.php";
require_once "/opt/lampp/htdocs/Programacion/Colaboracion_Clonacion_tostring_Autoload/Digimones/ejercicio.php";

$digimon1 = new Digimon("ivanmon",50,100);
$digimon2 = new Digimon("cacamon",50,100);

$equipo = new EquipoDigimon($digimon1,$digimon2);

$cadenaJson = json_encode($equipo);

echo $cadenaJson;