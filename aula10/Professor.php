<?php
require_once "Pessoa.php";
class Professor extends Pessoa{
    //atributos
    private $especialidade;
    private $salario;

    //métodos
    public function receberAum($a){
        $this->salario+=$a;
    }

    //métodos especiais
    // public function __construct($e,$s)
    // {
    //     $this->setEspecialidade($e);
    //     $this->setSalario($s);
    // }
    
    /**
     * Get the value of especialidade
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     */
    public function setEspecialidade($especialidade): self
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}