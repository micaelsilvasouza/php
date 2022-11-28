<?php
    class Conta{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function Conta($d, $t){
            $this->numConta = rand(1000, 9999);
            $this->tipo = strtoLower($t);
            $this->dono = $d;
            $this->status = false;
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($nc){
            $this->numConta = $nc;
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

        protected function setSaldo($sa){
            $this->saldo = $sa;
        }

        public function getStatus(){
            return $this->status;
        }

        protected function setStatus($st){
            $this->status = $st;
        }

        public function abrirConta(){
            $this->setStatus(true);
            if($this->tipo == "cc"){
                $this->setSaldo(50);
            }else if($this->tipo == "cp"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->saldo == 0){
                $this->setStatus(false);
            }else if($this->saldo > 0){
                echo "Sua conta ainda possui saldo positivo, saque todo o dinhero antes de tentar fechar essa conta.<br>";
            }else{
                echo "Sua conta está com salco negativo, essa conta não pode ser fechada até que isso mude.<br>";
            }
        }

        public function depositar($sa){
            $this->saldo += $sa;
        }
        public function sacar($sa){
            if($sa > 0 && $sa <= 2000 && $sa <= $this->getSaldo()){
                $this->setSaldo($this->saldo - $sa);
            }else{
                echo "Valor maximo para saque é de 2000, por favor tente outro valor.<br>";
            }
        }

        public function pagarMensal(){
            if($this->tipo == "cc"){
                $this->saldo -= 12;
            }else{
                $this->saldo -= 20;
            }
        }
    }


