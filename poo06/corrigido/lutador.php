<?php
class Lutador{
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar(){
        echo "<p>---------------------------------------</p>";
        echo "<p>Chegou a Hora o lutador ". $this->getNome();
        echo " veio diretamente de " . $this->getNascionalidade();
        echo ", tem ". $this->getIdade() . " anos e pesa ".$this->getPeso() . "kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitorias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }

    public function status(){
        echo "<p>---------------------------------------</p>";
        echo "<p>". $this->getNome(). " é um peso ". $this->getCategoria();
        echo ", ja ganhou ". $this->getVitorias(). " vezes,";
        echo " perdeu ". $this->getDerrotas(). " vezes e empatou ". $this->getEmpates(). " vezes</p>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() +1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() +1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }

    ///Metodos Especiais
    public function __construct($nome, $nascionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNascionalidade($nascionalidade);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getNascionalidade(){
        return $this->nascionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setNascionalidade($nasc){
        $this->nascionalidade = $nasc;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        if($this->getPeso() < 52.8){
            $this->categoria = "Inválido";
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }
}