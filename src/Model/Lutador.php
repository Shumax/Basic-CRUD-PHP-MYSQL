<?php

class Lutador{
	private $id=null;
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;
	

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($n){
		$this->nome = $n;
	}
	public function getNacionalidade(){
		return $this->nacionalidade;
	}
	public function setNacionalidade($nac){
		$this->nacionalidade = $nac;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function setIdade($i){
		$this->idade = $i;
	}
	public function getAltura(){
		return $this->altura;
	}
	public function setAltura($a){
		$this->altura = $a;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function setPeso($p){
		$this->peso = $p;
		$this->setCategoria();
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function setCategoria(){
		if($this->getPeso() <= 52.2){
			$this->categoria = "O lutador nao possui o peso minimo";
		}elseif($this->getPeso() <= 70.3){
			$this->categoria = "Leve";
		}elseif($this->getPeso() <= 83.9){
			$this->categoria = "Medio";
		}elseif($this->getPeso() <= 120.2){
			$this->categoria = "Pesado";
		}else{
			$this->categoria = "O lutador está acima do peso máximo";
		}
	}
	public function getVitorias(){
		return $this->vitorias;
	}
	public function setVitorias($v){
		$this->vitorias = $v;
	}
	public function getDerrotas(){
		return $this->derrotas;
	}
	public function setDerrotas($d){
		$this->derrotas = $d;
	}
	public function getEmpates(){
		return $this->empates;
	}
	public function setEmpates($e){
		$this->empates = $e;
	}
	
}