<?php
require_once "../Basico/Digimon.php";

class DigimonTipoPlanta extends Digimon{
    public array $ataques;
    public int $altura;

    public function __construct($nombre,$ataque,$defensa,$altura,$ataques=["Látigo cepa","Luz solar","Excavar"],$tipo="Agua",$nivel=1){
        parent::__construct($nombre,$ataque,$defensa,$tipo,$nivel);
        $this->altura=$altura;
        $this->ataques=$ataques;
    }

    public function atacar($tipo):bool{
        if($tipo=="Virus"){
            $this->nivel+=10;
            return true;
        }else{
            return false;
        }
    }

    public function Imprimir():string{
        return parent::MostrarTodo()." y tengo de altura: ".$this->altura.". Y mis ataques son: ".$this->atak($this->ataques);
    }

    private function atak($ataques):string{
        $text="";
        for($i=0;$i<count($ataques);$i++){
            $text.=$ataques[$i]." ";
        }
        return $text;
    }

    public function getAtaques(): array {return $this->ataques;}

    public function getAltura(): int {return $this->altura;}

    public function setAtaques(array $ataques): void {$this->ataques = $ataques;}

	public function setAltura(int $altura): void {$this->altura = $altura;}
}
	
$digimon = new DigimonTipoPlanta("bryan",100,5,20);
$text = $digimon->Imprimir();
echo $text;