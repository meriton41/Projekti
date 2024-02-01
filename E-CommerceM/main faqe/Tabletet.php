<?php
class Tabletet{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Ngjyra;
    private $Cmimi;
    private $Memoria;
    private $img;
    private $pershkrimi;
    private $edit;
    

    public function __construct($e, $n, $c, $m, $i, $p, $ed){
        $this->Emri=$e;
        $this->Ngjyra=$n;
        $this->Cmimi=$c;
        $this->Memoria=$m;
        $this->img=$i;
        $this->pershkrimi=$p;
        $this->edit=$ed;
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
    public function getImg(){
        return $this->img;
    }
    public function setImg($i){
        $this->img = $i;
    }
    
    public function getPershkrimi(){
        return $this->pershkrimi;
    }
    public function setPershkrimi($p){
        $this->Pershkrimi = $p;
    }
    public function getEdit(){
        return $this->Edit;
    }
    public function setEdit($ed){
        $this->Edit = $ed;
    }
    public function __toString(){
        return "Emri: ".$this->Emri.",ngjyra ".$this->Ngjyra."dhe pershkrimi".$this->pershkrimi;
    }
}
?>