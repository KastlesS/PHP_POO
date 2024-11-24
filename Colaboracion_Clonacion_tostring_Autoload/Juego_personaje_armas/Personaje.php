<?php
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