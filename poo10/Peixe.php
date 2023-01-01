<?php
require_once "Animal.php";
class Peixe extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "<p>Nadando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo Substâncias</p>";
    }

    public function emitirSom(){
        echo "<p>Peixe não faz Som</p>";
    }

    public function soltarBolha(){
        echo "<p>Soltou uma Bolha</p>";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($escama){
        $this->corEscama = $escama;
    }
}