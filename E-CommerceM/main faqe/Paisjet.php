<?php
class Paisjet{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Ngjyra;
    private $Cmimi;
    private $Memoria;
    

    public function __construct($e, $n, $c, $m){
        $this->Emri=$e;
        $this->Ngjyra=$n;
        $this->Cmimi=$c;
        $this->Memoria=$m;
    }
    
    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    public function getNgjyra(){
        return $this->Ngjyra;
    }
    public function setNgjyra($n){
        $this->Ngjyra = $n;
    }

    public function getCmimi(){
        return $this->Cmimi;
    }
    public function setCmimi($c){
        $this->Cmimi = $c;
    }

    public function getMemoria(){
        return $this->Memoria;
    }
    public function setMemoria($m){
        $this->Memoria = $m;
    }

    
    public function __toString(){
        return "Emri: ".$this->Emri." dhe ngjyra ".$this->Ngjyra;
    }
}
?>