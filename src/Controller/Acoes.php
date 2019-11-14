<?php

class Acoes extends Conexao{

	public function apresentar($tabela, $p){
		return $this->listarDados($tabela,$p);		
	}

	public function status($tabela, $where, $campos){
		return $this->listarDados($tabela,$where,$campos);
	}
	
	public function ganharLuta($tabela){
		$this->setVitorias($this->getVitorias()+1);
	}

	public function perderLuta(){
		$this->setDerrotas($this->getDerrotas()+1);
	}

	public function empatarLuta(){
		$this->setEmpates($this->getEmpates()+1);
	}
}