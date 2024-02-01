<?php
class PCasndServers{

    private $P_id;
    private $emri;
    private $ngjyra;
    private $cmimi;
    private $memoria;
    private $img;
    private $pershkrimi;
    private $edit;
    

    public function __construct($e, $n, $c, $m, $i, $p, $ed){
        $this->emri=$e;
        $this->ngjyra=$n;
        $this->cmimi=$c;
        $this->memoria=$m;
        $this->img=$i;
        $this->pershkrimi=$p;
        $this->edit=$ed;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function setEmri($e){
        $this->emri = $e;
    }

    public function getNgjyra(){
        return $this->ngjyra;
    }
    public function setNgjyra($n){
        $this->ngjyra = $n;
    }

    public function getCmimi(){
        return $this->cmimi;
    }
    
    public function setCmimi($c){
        $this->cmimi = $c;
    }

    public function getMemoria(){
        return $this->memoria;
    }
    public function setMemoria($m){
        $this->memoria = $m;
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
        $this->pershkrimi = $p;
    }
    public function getEdit(){
        return $this->edit;
    }
    public function setEdit($ed){
        $this->edit = $ed;
    }
    public function __toString(){
        return "Emri: ".$this->emri." dhe ngjyra ".$this->ngjyra;
    }
}
?>