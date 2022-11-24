<?php
    class Carro{
        var $modelo;
        var $marca;
        var $cor;
        var $potencia;
        var $ligado;

        function ligar(){
            $this->ligado = true;
        }

        function desligar(){
            $this->ligado = false;
        }

        function dirigir(){
            if($this->ligado){
                echo "<p>Dirigindo o meu carro! thandam...</p>";
            }else{
                echo "<p>Ligue o carro antes de querer dirigir!!!</p>";
            }
        }
    }
?>