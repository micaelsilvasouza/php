<?php
require_once "controlador.php";
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo "<h3>".(str_pad('menu', 30, '-', STR_PAD_RIGHT))."<h3>";
        echo "<p>Está ligado? ". ($this->getLigado()? "SIM" : "NÃO"). "</p>";
        echo "<p>Está tocando? ". ($this->getTocando()? "SIM" : "NÃO"). "</p>";

        echo "<p>Volume: ". $this->getVolume();
        for($i = 0; $i<=$this->getVolume(); $i+=5){
            echo "|";
        }
        echo "</p>";
    }

    public function fecharMenu(){
        echo "<p>Fechando o Menu...</p>";
    }

    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    
    public function ligarMudo(){
        if($this->getLigado && $this->getVolume > 0){
            $vol = $this->getVolume();
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume <= 0){
            $this->setVolume(50); 
        }
    }

    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}