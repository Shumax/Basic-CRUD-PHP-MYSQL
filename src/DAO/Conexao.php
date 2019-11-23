<?php

namespace DAO;

define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_BANCO','uec');
define('qdo','');

class Conexao{
	public function conectaBanco(){
		$conecta = mysqli_connect(
			DB_SERVER, 
			DB_USERNAME, 
			DB_PASSWORD, 
			DB_BANCO) 
		or die(mysqli_connect_error());
		return $conecta;
		/*$this->db = mysqli_select_db($this->conecta, $database);
		if(!$this->conecta){
			echo "não conectou";
		}else{
			echo"entrou<br>";
		}*/
	}
	
}