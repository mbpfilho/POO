<?php
require_once "Publicacao.php";
require_once "Pessoa.php";
class Livro implements Publicacao{
    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //métodos
    public function detalhes(){
        echo "<p><big>Título: ".$this->getTitulo()."</big><br>Autor: <em>".$this->getAutor()."</em><br>Páginas: ".$this->getTotPaginas()." Atual: ".$this->getPagAtual()."<br>Sendo lido por: ".$this->getLeitor()->getNome()."</p><hr>";
    }
    
    function abrir(){
        $this->setAberto(true);
    }
    function fechar(){
        $this->setAberto(false);
    }
    function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
        }else{
            $this->pagAtual=$p;
        }
    }
    function avancarPag(){
        if($this->pagAtual<$this->totPaginas){
            $this->pagAtual++;
        }
    }
    function voltarPag(){
        if($this->pagAtual>0){
            $this->pagAtual--;
        } 
    }

    //métodos especiais
    function __construct($t,$a,$tp,$l)
    {
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setTotPaginas($tp);
        $this->aberto=false;
        $this->pagAtual=0;
        $this->setLeitor($l);
    }
    

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     */
    public function setTotPaginas($totPaginas): self
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     */
    public function setPagAtual($pagAtual): self
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of aberto
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     */
    public function setAberto($aberto): self
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of leitor
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     */
    public function setLeitor($leitor): self
    {
        $this->leitor = $leitor;

        return $this;
    }
}