<?php
require_once "lutador.php";

class Luta{
    private $desafiante;
    private $desfiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiante, $desfiado){
        if($desafiante->getCategoria() === $desfiado->getCategoria() && $desafiante != $desfiado){
            echo "<p>Luta marcada com sucesso</p>";
            $this->setAprovada(true);
            $this->setDesafiante($desafiante);
            $this->setDesafiado($desfiado);
        }else{
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }

    public function lutar(){
        if($this->getAprovada()){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);

            switch ($vencedor) {
                case 0:
                    echo "<p>Empate!</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "<p>{$this->desafiado->getNome()} venceu a luta</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>{$this->desafiante->getNome()} venceu a luta</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function setDesafiado($desfiado){
        $this->desafiado = $desfiado;
    }

    public function setRounds($rounds){
        $this->round = $rounds;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}