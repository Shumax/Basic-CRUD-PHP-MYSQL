<?php

namespace DAO;

class Manipula extends Conexao
{
	public function insereDados($tabela, $vetordados): string
	{
		foreach($vetordados as $i => $valor){
			$indices[] = $i;
			$insertvalores[] = '\''.$valor.'\'';
		}
		$indices = implode(',',$indices);
		$insertvalores = implode(',',$insertvalores);
		$mysql = "INSERT INTO {$tabela} ($indices) VALUES ({$insertvalores})";
		
		return $this->executar($mysql);
		/*o foreach separa o nome da coluna na variavel indices 
			e seus valores no insertvalores
		  depois é utilizado o comando implode para colocar ',' entre os dados
		*/
	}
	
	public function listarDados($tabela, $qdo = null, $campos = '*'): array
	{
		$qdo = ($qdo)?"WHERE {$qdo}":null;
		$mysql = "SELECT {$campos} FROM {$tabela} {$qdo}";
		$listar = $this->executar($mysql);
		//o if valida se tem registros de acordo com os parametros do select
		if(!mysqli_num_rows($listar)){
			return false;
		}elseif(qdo){
			//mostra todos os registros do banco
			while($i = mysqli_fetch_assoc($listar)){
				$apresentacao[] = $i;
			}
			return $apresentacao;
		}else{
			return $apresentacao[] = mysqli_fetch_assoc($listar);
		}
	}

	public function alteraDados($tabela, $vetordados, $where = null): string 
	{
		$where = ($where)?"WHERE {$where}": null;
		//importante que a where receba alguma valor, senão ele vai sobescrever todos os campos 
		foreach($vetordados as $i => $valor){
			$campos[] = "{$i} = '{$valor}'";
		}
		$campos = implode(',',$campos);
		$mysql = "UPDATE {$tabela} SET {$campos}{$where}";	
		return $this->executar($mysql);
	}

	public function apagarDados($tabela, $where=null): string 
	{
		$where = ($where)?"WHERE {$where}":null;
		$mysql = "DELETE FROM {$tabela} {$where}";
		return $this->executar($mysql);
	}
	
	public function executar($mysql)  
	{
		$link = $this->conectaBanco();
		$result = mysqli_query($link, $mysql) or die (mysqli_error($link));
		return $result;
	}
}