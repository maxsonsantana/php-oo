<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $espec;
    private $salario;

    public function ReceberAumento($aum){
        $this->salario += $aum;
    }

    //Geters and Seters
    public function getEspec()
    {
        return $this->espec;
    }
    public function setEspec($espec)
    {
        $this->espec = $espec;
        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }
}