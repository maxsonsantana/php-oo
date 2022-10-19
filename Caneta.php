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