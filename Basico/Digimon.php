<?php
class Digimon{
    public string $nombre;
    public int $ataque;
    public int $defensa;
    public string $tipo;
    public int $nivel;

    public function __construct($nombre,$ataque,$defensa,$tipo="Agua",$nivel=1){
        $this->nombre=$nombre;
        $this->ataque=$ataque;
        $this->defensa=$defensa;
        $this->tipo=$tipo; 
        $this->nivel=$nivel;
    }
    

    public function Saludar():string{
        return "Hola soy {$this->nombre}";
    }

    public function MostrarDetalles():string{
        return "Estadísticas -> Ataque: {$this->ataque} , Defensa: {$this->defensa} <br>";
    }

    public function MostrarTodo():string{
        return $this->Saludar()." y mis stats son: ".$this->MostrarDetalles();
    }

    public function NivelTipo():string{
        return $this->Saludar()." y mi nivel es: {$this->nivel} y soy de tipo {$this->tipo}";
    }
}