<?php
class Lutador{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //métodos
    function apresentar(){
        echo "<h1>Lutador: ".$this->getNome()."</h1>";
        echo "<p>Origem: ".$this->getNacionalidade()."<br>";
        echo $this->getIdade()." anos<br>";
        echo $this->getAltura()." m de altura<br>";
        echo "Pesando ".$this->getPeso()." Kg<br>";
        echo $this->getVitorias()." vitórias<br>";
        echo $this->getDerrotas()." derrotas<br>";
        echo $this->getEmpates()." empates</p>";
    }
    function status(){
        echo "<p><strong>".$this->getNome()."</strong><br>";
        echo "Peso ".$this->getCategoria()."<br>";
        echo $this->getVitorias()." vitórias<br>";
        echo $this->getDerrotas()." derrotas<br>";
        echo $this->getEmpates()." empates</p>";

    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    //métodos especiais
    function __construct($nom,$nac,$ida,$alt,$pes,$vit,$der,$emp){
        $this->setNome($nom);
        $this->setNacionalidade($nac);
        $this->setIdade($ida);
        $this->setAltura($alt);
        $this->setPeso($pes);
        $this->setVitorias($vit);
        $this->setDerrotas($der);
        $this->setEmpates($emp);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;

        $this->setCategoria();

        return $this;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates): self
    {
        $this->empates = $empates;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso<52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso<=70.3){
            $this->categoria = "Leve";
        }elseif($this->peso<=83.9){
            $this->categoria = "Médio";
        }elseif($this->peso<=120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
        

        return $this;
    }
}