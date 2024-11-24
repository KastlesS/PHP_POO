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