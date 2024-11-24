<?php 
 
class Juego { 
    private string $titulo; 
    private string $motor; 
    private array $personaje; 
 
    public function __construct(string $t, string $m, Personaje ...$p){ 
        $this->titulo = $t; 
        $this->motor = $m; 
        $this->personaje = $p; 
    } 
 
    public function setTitulo(string $t) { 
        $this->titulo = $t; 
    } 
 
    public function getTitulo():string { 
        return $this->titulo; 
    } 
    public function setMotor(string $m) { 
        $this->motor = $m; 
    } 
 
    public function getMotor():string { 
        return $this->motor; 
    } 
 
    public function setPersonaje(Personaje $p) { 
        $this->personaje = $p; 
    } 
 
    public function getPersonaje():Personaje { 
        return $this->personaje; 
    } 
 
    public function Imprimir() { 
        echo "<pre>"; 
        echo "\t........................................\n"; 
        echo "\tTitulo: ".$this->titulo."\n"; 
        echo "\tMotor:  ".$this->motor."\n";    
        foreach($this->personaje as $personajes){
            echo "\t ".$personajes->Imprimir()."\n";
        } 
        echo "\t........................................\n"; 
        echo "</pre>"; 
        echo "<br />"; 
    } 

    public function clonePersonaje(){
        $this->personaje=clone($this->personaje);
    }

    public function __tostring():string{
        $text=$this->Imprimir()."\n";
        foreach($this->personaje as $value){
            $text.=$value->Imprimir();
        }
        return $text;
    }
} 
 
class Personaje { 
    private string $nombre; 
    private int $edad; 
    private string $bebida; 
    private array $armas;
 
    public function __construct(string $n,int $e, string $b, Arma ...$armas){ 
        $this->nombre = $n; 
        $this->edad = $e; 
        $this->bebida = $b; 
        $this->armas=$armas;
    } 
 
    public function setNombre(string $n) { 
 
        $this->nombre = $n; 
    } 
 
    public function getNombre():string { 
        return $this->nombre; 
    } 
 
    public function setEdad(int $e) { 
        $this->edad = $e; 
    } 
 
    public function getEdad():int { 
        return $this->edad; 
    } 
 
    public function setBebida(string $b) { 
        $this->bebida = $b; 
    } 
 
    public function getBebida():string { 
        return $this->bebida; 
    } 
 
    public function Imprimir() { 
        echo "\tPersonaje: \n"; 
        echo "\t\tNombre: ".$this->getNombre()."\n"; 
        echo "\t\tEdad:   ".$this->getEdad()."\n"; 
        echo "\t\tBebida: ".$this->getBebida()."\n";
        echo "\tArmas:\n";
        foreach($this->armas as $arma){
            echo "\t\t".$arma->Imprimir()."\n";
        } 
    } 

    public function __toString():string{
        $text=$this->Imprimir()."\n";
        foreach($this->armas as $arma){
            $text.=$arma->Imprimir();
        }
        return $text;
    }
}

class Arma{
    public string $nombre;
    public float $calibre;
    public string $tipo;

    public function __construct(string $nombre, float $calibre, string $tipo){
        $this->nombre = $nombre;
        $this->calibre = $calibre;
        $this->tipo = $tipo;
    }

	public function getNombre(): string {return $this->nombre;}

	public function getCalibre(): float {return $this->calibre;}

	public function getTipo(): string {return $this->tipo;}

	public function setNombre(string $nombre): void {$this->nombre = $nombre;}

	public function setCalibre(float $calibre): void {$this->calibre = $calibre;}

	public function setTipo(string $tipo): void {$this->tipo = $tipo;}

    public function Imprimir():void{
        echo "\t\tNombre: {$this->nombre} \n \t\tCalibre: {$this->calibre} \n \t\tTipo: {$this->tipo} <br>";
    }

    public function __toString():string{
        $text = "{$this->nombre} / {$this->tipo} / {$this->calibre}";
        return $text;
    }
}

$arma1 = new Arma("glock",50,"pistola");
$arma2 = new Arma("m4",75,"rifle");

$personaje1 = new Personaje("Pepe",20,"cocacola",$arma1,$arma2);

$juego1 = new Juego("Chete3","source",$personaje1);

echo $juego1->__tostring();
echo $personaje1->__toString(); 
echo $arma1->__toString(); 