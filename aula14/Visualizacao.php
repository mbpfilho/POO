<?php
require_once "Video.php";
require_once "Pessoa.php";
class Visualizacao{
    private $espectador;
    private $filme;

    function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    function avaliarNota($n){
        $this->filme->setAvaliacao($n);
    }
    function avaliarPorcent($p){
        if($p<=20){
            $nota=3;
        }elseif($p<=50){
            $nota=5;
        }elseif($p<=90){
            $nota=8;
        }else{
            $nota=10;
        }
        $this->filme->setAvaliacao($nota);
    }
    function __construct($e,$f)
    {
        $this->espectador=$e;
        $this->filme=$f;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }

    /**
     * Get the value of espectador
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     */
    public function setEspectador($espectador): self
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     */
    public function setFilme($filme): self
    {
        $this->filme = $filme;

        return $this;
    }
}