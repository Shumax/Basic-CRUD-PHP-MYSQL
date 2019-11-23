<?php

namespace Controller;

use DAO\Manipula;


class Acoes
{
	public function apresentar($tabela, $p):array{
		$e = (new Manipula)->listarDados($tabela,$p);		
		return $e;
	}

	public function status($tabela, $where, $campos):array{
		$e = (new Manipula)->listarDados($tabela,$where,$campos);
		return $e;
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