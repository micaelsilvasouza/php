<?php
require_once "Animal.php";
class Mamifero extends Animal{
    private $corPelo;
    function getCorPelo(){
        return $this->corPelo;
    }
    function setCorPelo($pelo){
        $this->corPelo = $pelo;
    }

    public function locomover(){
        echo "<p>Correndo</p>";
    }

    public function alimentar(){
        echo "<p>Mamando</p>";
    }

    public function emitirSom(){
        echo "<p>Som de Mamifero</p>";
    }
}