<?php
require_once "Aluno.php";
class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>BOLSA RENOVADA COM SUCESSO</P>";
    }

    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista, então paga mensalidade com desconto</p>";
    }

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}