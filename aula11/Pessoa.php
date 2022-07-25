<?php
abstract class Pessoa{
    //atributos
    protected $nome;
    private $idade;
    private $sexo;

    //método
    public final function fazerAniv(){
        $this->idade++;
    }

    //métodos especiais
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

class Visitante extends Pessoa{//heranca de implementacäo

}

class Aluno extends Pessoa{//heranca para diferenca
    //atributos
    private $matricula;
    private $curso;

    //método
    public function pagarMensalidade(){
        echo "<p>Pagamento de mensalidade do aluno ".$this->getNome()."</p>";
    }

    //métodos especiais

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

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

class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }

    public function pagarMensalidade()
    {
        echo "<p>$this->nome é bolsista. Paga com desconto.</p>";
    }

    /**
     * Get the value of bolsa
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     */
    public function setBolsa($bolsa): self
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}