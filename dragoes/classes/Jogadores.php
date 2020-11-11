<?php


/**
 * 
 */
class Jogadores
{

	public $id;
	public $nome;
	public $posicao;
	public $apelido;
	public $path_image;

	//Geters
	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getPosicao(){
		return $this->posicao;
	}

	public function getApelido(){
		return $this->apelido;
	}

	public function getPathImage(){
		return $this->path_image;
	}

	//Seters
	public function setId($param){
		$this->id = $param;
	}

	public function setNome($param){
		$this->nome = $param;
	}

	public function setPosicao($param){
		$this->posicao = $param;
	}

	public function setApelido($param){
		$this->apelido = $param;
	}

	public function setPathImage($param){
		$this->path_image = $param;
	}



	public function getJogadores(){
		$sql = new Sql();

		$results = $sql->run_query("SELECT * FROM tb_jogadores");
		json_encode($results);

		return $results;
		//print_r($results);

	}


	
	/*
	function __construct()
	{
		// do something $this->getJogadores();
	}
	*/

}


?>