<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == true){
            echo "A caneta está tampada, não dar para rabiscar";
        }else{
            echo "Escrevir e sair correndo...";
        }        
    }

    function tampar(){
        $this->tampada =true;//This é o objeto que chamou o métodos
    }

    function destampar(){
        $this->tampada =false;
    }
}
?>