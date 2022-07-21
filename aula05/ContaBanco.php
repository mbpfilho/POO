<?php
class ContaBanco{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //métodos
    public function abrirConta($t){
        if($this->getStatus()){
            echo "<p>Erro: conta já aberta</p>";
        }elseif($t=="cc"||$t=="cp"){
            $this->setStatus(true); 
            // $this->status=true;            
            $this->setTipo($t); 
            $this->tipo=$t;
            if($t=="cc"){
                // $this->saldo=50;
                $this->setSaldo(50);
            }else{
                // $this->saldo=150;
                $this->setSaldo(150);
            }
        }else{
            echo "<p>Erro: tipo de conta irregular</p>";
        }
    }

    public function fecharConta(){
        if(!$this->getStatus()){
            echo "<p>Erro: conta fechada</p>";
        }elseif($this->getSaldo()!=0){
            echo "<p>Erro: conta näo zerada</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." encerrada</p>";
        }
    }

    public function depositar($valor){
        if(!$this->getStatus()){
            echo "<p>Erro: conta fechada</p>";
        }else{
            $this->setSaldo($this->getSaldo()+$valor);
            echo "<p>Depósito de $valor efetuado na conta de ".$this->getDono()."</p>";
        }
    }

    public function sacar($valor){
        if(!$this->getStatus()){
            echo "<p>Erro: conta fechada</p>";
        }elseif($valor>$this->getSaldo()){
            echo "<p>Erro: saldo insuficiente</p>";
        }else{
            $this->setSaldo($this->getSaldo()-$valor);
            echo "<p>Saque de $valor efetuado na conta de ".$this->getDono()."</p>";
        }
    }

    public function pagarMensal(){
        if(!$this->getStatus()){
            echo "<p>Erro: conta fechada</p>";
        }elseif($this->tipo=="cc"){
            $this->setSaldo($this->getSaldo()-12);
            echo "<p>Mensalidade de 12 debitada na conta de ".$this->getDono()."</p>";
        }else{
            $this->setSaldo($this->getSaldo()-20);
            echo "<p>Mensalidade de 20 debitada na conta de ".$this->getDono()."</p>";
        }
    }

    //métodos especiais
    public function __construct(){//$num,$nome
        $this->setStatus(false);
        $this->setSaldo(0);
        // $this->numConta=$num;
        // $this->dono=$nome;
        echo "<p>Conta criada com sucesso!</p>";
    }

	public function getNumConta() {
		return $this->numConta;
	}

	public function setNumConta($num) {
		$this->numConta = $num;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($t) {
		$this->tipo = $t;
	}

	public function getDono() {
		return $this->dono;
	}

	public function setDono($d) {
		$this->dono = $d;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function setSaldo($s) {
		$this->saldo = $s;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($s) {
		$this->status = $s;
	}
}