<?php

/**
 * 
 */
class Habilidades 
{

	public $id_habilidade;
	public $nome_habilidade;


	public function getIdHabilidade(){
		return $this->id_habilidade;
	}


	public function getNomeHabilidade(){
		return $this->nome_habilidade;
	}


	public function setIdHabilidade($param){
		$this->id_habilidade = $param;
	}

	public function setNomeHabilidade($param){
		$this->nome_habilidade = $param;
	}



	public function getListaHabilidades():array{

		$sql = new Sql();
		$results = $sql->run_query('SELECT * FROM tb_habilidades');

		json_encode($results);

		return $results;
	}
	
	/*function __construct(argument)
	{
		# code...
	}*/


}