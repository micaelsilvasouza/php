<?php
require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao{
    private $expectador;
    private $filme;

    public function __construct($expectador, $filme){
        $this->expectador = $expectador;
        $this->filme = $filme;

        $this->expectador->setTotAssistido($this->expectador->getTotAssistido() + 1);
        $this->filme->setViews($this->filme->getViews() + 1);
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc){
        $nota = $porc * 10 / 100;
        $this->filme->setAvaliacao($nota);
    }

    public function getExpectador(){
        return $this->expectador;
    }

    public function getFilme(){
        return $this->filme;
    }

    public function setExpectador($expectador){
        $this->expectador = $expectador;
    }

    public function setFilme($filme){
        $this->filme = $filme;
    }

}