<?php
class Pessoa{
    //atributos
    private $nome;
    private $idade;
    private $sexo;

    //métodos
    public function fazerAniv(){
        $this->idade++;
    }

    //métodos especiais
    // function __construct($n,$i,$s)
    // {
    //     $this->setNome($n);
    //     $this->setIdade($i);
    //     $this->setSexo($s);
    // }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     */
    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
}