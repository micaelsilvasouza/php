<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->seteSaldo(50);
            }else{
                $this->saldo = 150;
            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fecha-lá</p>";
            }elseif ($this->getSaldo() < 0){
                echo "<p>Conta em débito, impossivel encerrar</p>";
            }else{
                $this->setStatus(false);
            }
        }

        public function depositar($v){
            if($this->getStatus == true){
                $this->setSaldo($this->getSaldo() + $v);
            }else{
                echo "<p>Impossivel Depositar</p>";
            }

        }

        public function sacar($v){
            if($this->getStauts()){
                if($this->getSaldo() > 0){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            }else{
                echo "<p>Impossivel Sacar</p>";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }else{
                $v = 20;
            }

            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                    echo "<p>Saldo Insufuciente para pagar a mensalidade</p>";
                }
            }else{
                echo "<p>Problemas com a conta</p>"
            }
        }

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function getNumConta(){
            return $this->numconta;
        }

        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($s){
            $this->status = $s;
        }
    }