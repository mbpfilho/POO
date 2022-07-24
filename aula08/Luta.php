<?php
require_once "Lutador.php";
class Luta{
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //métodos
    public function marcarLuta($l1,$l2){
        if($l1->getCategoria()==$l2->getCategoria()&&$l1!=$l2){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor=rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<h1>Empataram!</h1>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo "<h1>".$this->getDesafiado()->getNome()." venceu!</h1>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo "<h1>".$this->getDesafiante()->getNome()." venceu!</h1>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
            }
        }else{
            echo "<p>Luta näo pode acontecer</p>";
        }
    }
    //métodos especiais
    public function __construct()
    {
        
    }
    
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado): self
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante): self
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds): self
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada): self
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}