<?php
require_once "Pessoa.php";
class Funcionario extends Pessoa{
    //atributos
    private $setor;
    private $trabalhando;

    //métodos
    public function mudarTrabalho(){
        $this->trabalhando=!$this->trabalhando;
    }

    //métodos especiais
    // public function __construct($s)
    // {
    //     $this->setSetor($s);
    // }

    /**
     * Get the value of setor
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     */
    public function setSetor($setor): self
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     */
    public function setTrabalhando($trabalhando): self
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}