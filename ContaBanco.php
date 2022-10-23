<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Construtor
        public function __construct(){
            $this->saldo = 0;
            $this->status = false;
        }

        //Métodos Get and Setters
        public function getNunConta(){
            return $this->numConta;
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
        public function setSaldo($sd){
            $this->saldo = $sd;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($st){
            $this->status= $st;
        }

        //Outros Métodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t=='CC'){
                $this->setSaldo(50);
            }else{
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo()>0){
                echo "<p>Conta não pode ser encerrada devido ter saldo positivo em dinheiro</p>";
            } else if($this->getSaldo()<0){
                echo "<p>Conta não pode ser encerrada por possuir saldo negativo</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de ".$this->getDono()." encerrada com Sucesso em ". date("d-m-yy h:i") ."</p>";
            }
        }

        public function depositar($val){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$val);
                echo "<p>Deposito de $val realizado com sucesso na conta de ". $this->getDono()."</p>";
            }else{
                echo "<p>Esta conta está encerrada, não é possível depositar.</p>";
            }
        }
        public function sacar($val){
            if($this->getStatus()){
                if($this->getSaldo() >= $val){                   
                    $this->setSaldo($this->getSaldo() -$val);
                    echo "<p>Saque no valor de $val autorizado na conta de " .$this->getDono()."</p>";
                }else{
                    echo "<p>O valor de R$ $val está acima do saldo na conta de ".$this->getDono()."</p>";
                }
            }else{
                echo "<p>Essa conta encontra-se fechada, não é possível efetuar o saque.</p>";
            }
        }
        public function pagarMensalidade(){
            if($this->getTipo() == "CC"){
                $val = 12;
            }else if($this->getTipo() == "CP"){
                $val = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $val);
                echo "<p>Mensalidade de R$ $val debitada na conta de ".$this->getDono()."</p>";
            }else{
                echo "<p>Houve problemas na cobrança da Conta, Contate o Administrador do Sistema.</p>";
            }
        }
    }
?>