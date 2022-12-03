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

    public function __construct($nome, $idade, $peso){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPeso($peso);

        if($peso < 69){
            $this->setCategoria("Leve");
        }elseif($peso < 85){
            $this->setCategoria("Médio");
        }else{
            $this->setCategoria("Pesado");
        }
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
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
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

    public function apresentar(){
        echo "Apresentação<br><br>";
        echo "lutador = {$this->getNome()} <br>Idade = {$this->getIdade()}<br>Peso = {$this->getPeso()}<br>Categoria = {$this->getCategoria()}<br><br>";
    }

    public function status(){
        echo "Estatus<br><br>";
        echo "Vitorias = {$this->getVitorias()}<br> Derrotas = {$this->getDerrotas()}<br> Empates = {$this->getEmpates()}<br>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() +1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }
}
