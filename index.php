<pre><?php
require "vendor/autoload.php";
require "src/DAO/Conexao.php";
require "src/Model/Lutador.php";
require "src/Controller/Acoes.php";

	$build = new Lutador;
	$conexao = new Conexao();
	$acao = new Acoes;

	$conexao->conectaBanco();
	$build->setPeso(98);
	$cadastra = array('nome_lutador' => 'John Jones','nacionalidade_lutador' =>'brasileiro', 'idade_lutador'=>31,'altura_lutador' => 1.92, 'peso_lutador' => $build->getPeso(), 'categoria_lutador' => $build->getCategoria(),'vitorias_lutador' => 10,'empates_lutador' => 5, 'derrotas_lutador' =>2);
	
	//print_r($cadastra);
	$insert = $conexao->insereDados('lutador',$cadastra);
	
	if($insert == true){
		echo 'Salvo';
	}else{
		echo 'Deu ruim <br>';
	}
	
	print_r($acao->apresentar('lutador', "id_lutador = 6"));
	//print_r($c->apresentar('lutador',''));
	
	
	print_r($acao->status('lutador',"id_lutador = 6",'nome_lutador, peso_lutador, vitorias_lutador, derrotas_lutador, empates_lutador'));
	
	
	$altera = array('nome_lutador'=>'Rocky Balboa','nacionalidade_lutador'=>'Norte Americano','idade_lutador'=>73,'altura_lutador'=>1.72,'peso_lutador' =>$build->getPeso(),'categoria_lutador'=>$build->getCategoria(),'vitorias_lutador'=>36,'derrotas_lutador'=>16);
	$update = $conexao->alteraDados('lutador',$altera,'id_lutador=6');
	
	$delete = $conexao->apagarDados('lutador',"id_lutador = 22");
	
	
	