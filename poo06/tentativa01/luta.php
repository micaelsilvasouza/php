<?php
require_once "lutador.php";

class Luta{
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiante, $desafiado){
        if($desafiante->getCategoria() === $desafiado->getCategoria()){
            if($desafiante != $desafiado){
                echo "<p>Luta marcada com sucesso</p>";
                $this->setDesafiante($desafiante);
                $this->setDesafiado($desafiado);
                $this->setAprovada(true);
            }else{
                echo "<p>Os lutadores são a mesma pessoa</p>";
            }
        }else{
            echo "<p>Lutadores de Categorias diferentes</p>";
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
        if(!($this->getAprovada())){
            $this->desafiante = $desafiante;
        }
    }

    public function setDesafiado($desafiado){
        if($this->getAprovada() == false){
            $this->desafiado = $desafiado;
        }
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    private function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}