<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;
    //metodos especiais
    function __construct(){
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
    }
    
    function getVolume()
    {
        return $this->volume;
    }

    function setVolume($volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    function getLigado()
    {
        return $this->ligado;
    }

    function setLigado($ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }

    function getTocando()
    {
        return $this->tocando;
    }

    function setTocando($tocando): self
    {
        $this->tocando = $tocando;

        return $this;
    }
    //metodos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<h2>Menu</h2>";
        echo "<p>Está ligado?: ".($this->getLigado()?"SIM":"NÄO")."</p>";
        echo "<p>Está tocando?: ".($this->getTocando()?"SIM":"NÄO")."</p>";
        echo "<p>Volume: ".$this->getVolume();
        for($i=0;$i<=$this->getVolume();$i+=5){echo "|";}
        echo "</p>";
    }
    public function fecharMenu(){
        echo "<p>Fechando Menu...</p>";
    }
    public function maisVolume(){
        if($this->getLigado()&&$this->getVolume()<=100){
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume(){
        if($this->getLigado()&&$this->getVolume()>=5){
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function ligarMudo(){
        if($this->getLigado()&&$this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado()&&$this->getVolume()==0){
            $this->setVolume(10);
        }
    }
    public function play(){
        if($this->getLigado()&&!$this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado()&&$this->getTocando()){
            $this->setTocando(false);
        }
    }
}