<?php
spl_autoload_register(function($clase){
    require_once __DIR__."/".$clase.".php";
});

$arma = new Arma("ak47",90,"rifle");
echo $arma->Imprimir();