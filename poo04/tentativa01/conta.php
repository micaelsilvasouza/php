<?php
    class Conta{
        private $dono;
        private $tipo;
        private $senha;
        private $saldo;

        public function Conta($d, $t, $s, $x){
            $this->setDono($d);
            $this->setTipo($t);
            $this->senha = $s;
            $this->saldo = $x;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function depositar($x){
            $this->saldo += $x;
            echo "<p>Foi depositado um valor de $x reais na conta, agora o saldo é {$this->getSaldo()} reais</p>";
        }

        public function sacar($s, $x){
            if($s == $this->senha){
                if($x <= $this->getSaldo()){
                    $this->saldo -= $x;
                    echo "<p>Foi sacado um valor de $x reais na conta, agora o saldo é {$this->getSaldo()} reais.</p>";
                }else{
                    echo "<p>Saldo insuficiente para efetuar o saque</p>";
                }
            }else{
                echo "<p>Senha invalida</p>";
            }
        }
    }