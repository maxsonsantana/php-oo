<?php
class Caneta {
    //Public :: Acessado de todas as classes
    //Private :: Acessado apenas na classe atual
    //Protected :: Acessado apenas na classe atual e subclasses
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //Construtor[Também é possível criar o método construtor com o mesmo nome da classe. Ex.: public function Caneta(){}]    
    public function __construct($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    //Get and Setters
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }

    public function rabiscar(){
        if($this->tampada == true){
            echo "A caneta está tampada, não dar para rabiscar";
        }else{
            echo "Escrevir e sair correndo...";
        }        
    }

    private function tampar(){
        $this->tampada =true;//This é o objeto que chamou o métodos
    }

    private function destampar(){
        $this->tampada =false;
    }
}
?>