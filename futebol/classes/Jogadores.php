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
	public $time;


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

	public function getTime(){
		return $this->time;
	}


	//SETERS
	public function setNome($param){
		$this->nome = $param;
	}

	public function setIdade($param){
		$this->idade = $param;
	}

	public function setPosicao($param){
		$this->posicao = $param;
	}

	public function setNacionalidade($param){
		$this->nacionalidade = $param;
	}

	public function setTime($param){
		$this->time = $param;

	}


	//Setando os dados
	public function setData($data){
		
		$this->setNome($data["nome_jogador"]);
		$this->setIdade($data["idade"]);
		$this->setPosicao($data["posicao_jogador"]);
		$this->setNacionalidade($data["nacionalidade_jogador"]);
		$this->setTime($data["time"]);
	}


	public function __toString(){

		return json_encode(array(
					"nome_jogador"=>$this->getNome(),
					"idade"=>$this->getIdade(),
					"posicao_jogador"=>$this->getPosicao(),
					"nacionalidade_jogador"=>$this->getNacionalidade(),
					"time"=>$this->getTime()
			
		));
	}

	public function insert(){

		$sql = new Sql();

		$sql->run_query("INSERT INTO tb_jogadores (nome_jogador, idade, posicao_jogador, nacionalidade_jogador, time_id) VALUES (:NOME, :IDADE, :POSICAO, :NACIONALIDADE, :TIME_ID)", array(
				"NOME"=>$this->nome,
				"IDADE"=>$this->idade,
				"POSICAO"=>$this->posicao,
				"NACIONALIDADE"=>$this->nacionalidade,
				"TIME_ID"=>$this->time
				
			));
	}


}

?>