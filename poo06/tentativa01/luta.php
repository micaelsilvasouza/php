<?php
class Luta{
    private $desafiante;
    private $desfiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiante, $desfiado){
        if($desafiante->getCategoria() == $desafiado->getCategoria()){
            if($desafiante != $desafiado){
                echo "<p>Luta marcada com sucesso</p>";
                $this->setAprovada(true);
                $this->setDesafiado($desafiado);
                $this->setDesafiante($desafiante);
            }else{
                echo "<p>Os participantes são o mesmo lutador, impossivel de marcar a luta</p>";
            }
        }else{
            echo "<p>Lutadores de categorias diferentes</p>";
        }
    }

    public function luta(){
        if($this->getAprovada()){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0, 2);

            switch ($vencedor) {
                case 0:
                    echo "<p>Empatou</p>";
                    $this->desafiante->empatar();
                    $this->desafiado->empatar();
                    break;
                case 1:
                    echo "<p>{$this->desafiado->getNome()}</p>";
                    $this->desafiante->perderLuta();
                    $this->desagiado->ganharLuta();
                    break;
                case 2:
                    echo "<p>{$this->desafiante->getNome()}</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                default:
                    echo "#########ERRO##########";
                    break;
            }
        }else{
            echo "<p>Essa luta não foi aprovada</p>";
        }
    }

    public function __construct(){
        $this->setRounds(5);
        $this->setAprovada(false);
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
        if(!($this->getAprovada)){
            $this->desafiante = $desafiante;
        }
    }

    public function setDesafiado($desfiado){
        if($this->getAprovada == false){
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