<?php
class Uec{
    private $nome;
    private $nacionalidade, $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates ;    

    //Construtor
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    //Get and Setters
    public function getNome(){
        return $this->nome;
    } 
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    } 
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
        return $this;
    }    
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
        return $this;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
        return $this;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = 'Inválido';
        }else if($this->peso <= 70.3){
            $this->categoria = 'Leve';
        }else if($this->peso <= 83.9){
            $this->categoria = 'Médio';
        }else if($this->peso <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Inválido';
        }        
        return $this;
    }
    public function getVitorias(){
        return $this->vitorias;
    }    
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
        return $this;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
        return $this;
    }
    public function getEmpates(){
        return $this->empates;
    }    
    public function setEmpates($empates){
        $this->empates = $empates;
        return $this;
    }

    //Métodos
    public function apresentar(){
        echo "<p>-------------------------------</p>";
        echo 'Nome: '.$this->getNome().'<br>';
        echo 'Nacionalidade: '.$this->getNacionalidade().'<br>';
        echo 'Idade: '.$this->getIdade().'<br>';
        echo 'Altura: '.$this->getAltura().'<br>';
        echo "<p>-------------------------------</p>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    function status(){
        echo "<p>-------------------------------</p>";
        echo "<p>". $this->getNome() . " é um peso ". $this->getCategoria();
        echo " e já ganhou ". $this->getVitorias() . " vezes,";
        echo " perdeu ". $this->getDerrotas() . " vezes e ";
        echo "empatou ". $this->getEmpates() . " vezes";
        echo "<p>-------------------------------</p>";
    }
}
?>