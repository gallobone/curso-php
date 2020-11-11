<?php


/**
 * 
 */
class Pontuacao
{
	

	public $id;
	public $id_usuario;
	public $id_jogador;
	public $id_habilidade;
	public $pontuacao;




	/*Geters*/
	public function getId(){
		return $this->id;
	}

	public function getIdUsuario(){
		return $this->id_usuario;
	}


	public function getIdJogador(){
		return $this->id_jogador;
	}


	public function getIdHabilidade(){
		return $this->id_habilidade;
	}


	public function getPontuacao(){
		return $this->pontuacao;
	}


	/*Seters*/
	public function setId($param){
		$this->id = $param;
	}

	public function setIdUsuario($param){
		$this->id_usuario = $param;
	}

	public function setIdJogador($param){
		$this->id_jogador = $param;
	}

	public function setIdHabilidade($param){
		$this->id_habilidade = $param;
	}

	public function setPontuacao($param){
		$this->pontuacao = $param;
	}




	/*function __construct(argument)
	{
		# code...
	}*/

	public function consultaPontuacao($id_usuario, $id_jogador, $id_habilidade){
		$sql = new Sql();

		$results = $sql->run_query('SELECT * FROM tb_habilidades_jogador WHERE id_usuario = :USUARIO, id_jogador = :JOGADOR and id_habilidade = :ID_HABILIDADE', array(
			":USUARIO"=>$id_usuario,
			":JOGADOR"=>$id_jogador,
			":ID_HABILIDADE"=>$id_habilidade
		));

		if(count($results) > 0){
			echo "EXISTE";
		}
		else{
			echo "NADA";
		}
	}


	public function inserePontuacao($idUsuario, $idJogador, $idHabilidade, $pontuacao){
		$sql = new Sql();

		$sql->run_query('INSERT INTO tb_habilidades_jogador (id_usuario, id_jogador, id_habilidade, pontuacao) VALUES(:ID_USUARIO, :ID_JOGADOR, :ID_HABILIDADE, :PONTUACAO)', array(
			":ID_USUARIO"=>$idUsuario,
			":ID_JOGADOR"=>$idJogador,
			":ID_HABILIDADE"=>$idHabilidade,
			":PONTUACAO"=>$pontuacao
		)); 
	}
	


	public function atualizaPontuacao($idUsuario, $idJogador, $idHabilidade, $pontuacao){
		$sql = new Sql();

		$sql->run_query('UPDATE tb_habilidades_jogador SET pontuacao = :PONTUACAO WHERE id_usuario = :ID_USUARIO, id_jogador = :ID_JOGADOR, id_habilidade = :ID_HABILIDADE', array(
			":PONTUACAO"=>$pontuacao,
			":ID_USUARIO"=>$idUsuario,
			":ID_JOGADOR"=>$idJogador,
			":ID_HABILIDADE"=>$idHabilidade,
		)); 

	}


}