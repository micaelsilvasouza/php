<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login){
        /*$this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;*/

        parent::__construct($nome, $idade,$sexo);

        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm(){
        $this->totAssistido ++;
    }
}