<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t){
            $this->setTipo($t);
            $this-> status = true;
            if($t == "CC"){
                $this->saldo = 50;
            }else{
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->saldo > 0){
                print("Conta com dinheiro");
            }elseif($this->saldo < 0){
                print("Conta em débito");
            }else{
                $this->setStatus(false);
            }
        }

        public function depositar($v){
            if($this->getSaldo()){
                $this->saldo += $v;
            }else{
                print("Impossivel Depositar");
            }
        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else {
                    print("Saldo insuficiente");
                }
            }else{
                print("Impossivel Sacar");
            }
        }

        public function pagarMensal(){
            $v = 0;
            if($this->getTipo() == "CC"){
                $v = 12;
            }else {
                $v = 20;
            }

            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                    print ("Saldo Insuficiente");
                }
            }else{
                print ("Impossivel Pagar");
            }
        }

        public function __Construct(){
            $this->saldo = 0;
            $this->status = false;
        }

        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($s){
            $this->status = $s;
        }

        public function getStatus(){
            return $this->status;
        }
    }