<?php
/* spl_autoload_register(function($nombreClase){
    require_once "/opt/lamp/htdocs/Programacion/Basico/".$nombreClase.".php";
}); 
NO FUNCIONA Y NO SE POR QUE    */
namespace Digimon;

require_once "/opt/lampp/htdocs/Programacion/Basico/Digimon.php";

class EquipoDigimon{
    public array $digimones;

    public function __construct(Digimon ...$digimon){
        $this->digimones=$digimon;
    }

    public function AnyadirDigimoin(Digimon $digimon){
        $this->digimones[]=$digimon;
    }

    public function clone():array{
        $objetosClonados=[];
        foreach ($this->digimones as $digimon){
            $objetosClonados[]=clone($digimon);
        }
        return $objetosClonados;
    }

    public function getDigimones(): array {return $this->digimones;}

	public function setDigimones(array $digimones): void {$this->digimones = $digimones;}

    public function __toString():string{
        $text="";
        foreach($this->digimones as $value){
            $text.=$value->nombre." "; 
        }
        return $text;
    }
}

/* $dig1 = new Digimon("agumon",10,100);
$dig2 = new Digimon("nicomon",23,50);
$dig3 = new Digimon("ivanmon",1000,90);

$equipo  = new EquipoDigimon($dig1,$dig2,$dig3);

var_dump($equipo->getDigimones());
echo "<br> <br> <br> <br>";

$equipoClonado = clone($equipo);
$equipo2 = new EquipoDigimon();

echo $equipo->__toString();
*/



