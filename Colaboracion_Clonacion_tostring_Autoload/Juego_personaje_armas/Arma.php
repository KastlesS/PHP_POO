<?php
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