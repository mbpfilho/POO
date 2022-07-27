<?php
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    protected function ganharExp($n){
        $this->experiencia+=$n;
    }
    function __construct($n,$i,$s)
    {
        $this->nome=$n;
        $this->idade=$i;
        $this->sexo=$s;
        $this->experiencia=0;
    }

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

    /**
     * Get the value of experiencia
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set the value of experiencia
     */
    public function setExperiencia($experiencia): self
    {
        $this->experiencia = $experiencia;

        return $this;
    }
}
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    function assistirMaisUm(){
        $this->totAssistido++;
    }
    function __construct($n,$i,$s,$l)
    {
        parent::__construct($n,$i,$s);
        $this->login=$l;
        $this->totAssistido=0;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     */
    public function setLogin($login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     */
    public function setTotAssistido($totAssistido): self
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}