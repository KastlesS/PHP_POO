<?php
class Digimon{
    public function __construct(public string $nombre, public string $tipo, public int $ataque, public int $defensa,public int $nivel=1){}


    public function Saludar():string{
        return "Hola soy {$this->nombre}";
    }

    public function MostrarDetalles():string{
        return "Estadísticas -> Ataque: {$this->ataque} , Defensa: {$this->defensa} <br>";
    }
}

$agumon = new Digimon("Agumon","Agua",100,50);
echo $agumon->Saludar()."<br>";
echo $agumon->MostrarDetalles();