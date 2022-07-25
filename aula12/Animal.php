<?php
abstract class Animal
{
    protected $peso;
    protected $idade;
    protected $membros;
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

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
     * Get the value of membros
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     */
    public function setMembros($membros): self
    {
        $this->membros = $membros;

        return $this;
    }
}
class Mamifero extends Animal{
    private $corPelo;
    public function locomover()
    {
        echo "<br>Correndo";
    }
    public function alimentar()
    {
        echo "<br>Leite";
    }
    public function emitirSom()
    {
        echo "<br>Som de mamífero";
    }

    /**
     * Get the value of corPelo
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     */
    public function setCorPelo($corPelo): self
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}
class Reptil extends Animal
{
    private $corEscama;
    public function locomover()
    {
        echo "<br>Rastejando";        
    }
    public function alimentar()
    {
        echo "<br>Vegetais";
    }
    public function emitirSom()
    {
        echo "<br>Som de réptil";
    }

    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     */
    public function setCorEscama($corEscama): self
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
class Peixe extends Animal
{
    private $corEscama;
    public function locomover()
    {
        echo "<br>Nadando";        
    }
    public function alimentar()
    {
        echo "<br>Algas";
    }
    public function emitirSom()
    {
        echo "<br>Näo emite som";
    }
    public function soltarBolha()
    {
        echo "<br>Soltou uma bolha";
    }

    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     */
    public function setCorEscama($corEscama): self
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
class Ave extends Animal
{
    private $corPena;
    public function locomover()
    {
        echo "<br>Voando";        
    }
    public function alimentar()
    {
        echo "<br>Frutas";
    }
    public function emitirSom()
    {
        echo "<br>Som de ave";
    }
    public function fazerNinho()
    {
        echo "<br>Construiu um ninho";
    }

    /**
     * Get the value of corPena
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     */
    public function setCorPena($corPena): self
    {
        $this->corPena = $corPena;

        return $this;
    }
}
class Canguru extends Mamifero
{
    public function usarBolsa()
    {
        echo "<br>Usando bolsa"; 
    }
    public function locomover()
    {
        echo "<br>Saltando"; 
    }
}
class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "<br>Enterrando osso"; 
    }
    public function abanarRabo()
    {
        echo "<br>Abanando rabo"; 
    }
    public function emitirSom()
    {
        echo "<br>au au au";
    }
}
class Cobra extends Reptil{}

class Tartaruga extends Reptil
{
    public function locomover()
    {
        echo "<br>Andando bem devagar"; 
    }
}
class Goldfish extends Peixe{}

class Arara extends Ave{}