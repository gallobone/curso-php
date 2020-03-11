<?php


/**
 * 
 classe jogadores
 */
class Jogadores
{
	
	public $nome;
	public $idade;
	public $posicao;
	public $nacionalidade;


	//GETERS
	public function getNome(){
		return $this->nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getPosicao(){
		return $this->posicao;
	}

	public function getNacionalidade(){
		return $this->nacionalidade;
	}


	//SETERS
	public function setNome($param){
		$this->nome = $nome;
	}

	public function setIdade($param){
		$this->idade = $idade;
	}

	public function setPosicao($param){
		$this->posicao = $posicao;
	}

	public function setNacionalidade($param){
		$this->nacionalidade = $nacionalidade;
	}


}

?>