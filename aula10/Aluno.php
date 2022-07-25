<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
   //atributos
    private $matr;
    private $curso;

    //métodos
    public function cancelarMatr(){

    }

    //métodos especiais
    // public function __construct($m,$c)
    // {
    //     $this->setMatr($m);
    //     $this->setCurso($c);
    // }
    
    /**
     * Get the value of matr
     */
    public function getMatr()
    {
        return $this->matr;
    }

    /**
     * Set the value of matr
     */
    public function setMatr($matr): self
    {
        $this->matr = $matr;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}