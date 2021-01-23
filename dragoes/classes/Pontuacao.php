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

		$results = $sql->run_query('SELECT * FROM tb_habilidade_jogador WHERE id_usuario = :USUARIO and id_jogador = :JOGADOR and id_habilidade = :ID_HABILIDADE', array(
			":USUARIO"=>$id_usuario,
			":JOGADOR"=>$id_jogador,
			":ID_HABILIDADE"=>$id_habilidade
		));


		if(count($results) > 0){
			//if results > 0 call method to populate grid habilidades
			/*
			$row = $results[0];

			$id_usuario = $row['id_usuario'];
			$id_jogador = $row['id_jogador'];
			$id_habilidade = $row['id_habilidade'];
			$pontuacao = $row['pontuacao'];


			$this->setIdUsuario($id_usuario);
			$this->setIdJogador($id_jogador);
			$this->setIdHabilidade($id_habilidade);
			$this->setPontuacao($pontuacao);

			//json_encode($results);
			//return $results;
			*/
			$resultado = true;
		}
		else{
			$resultado = false;
		}
		return $resultado;
	}
	


	public function inserePontuacao($idUsuario, $idJogador, $idHabilidade, $pontuacao){
		$sql = new Sql();

		$sql->run_query('INSERT INTO tb_habilidade_jogador (id_usuario, id_jogador, id_habilidade, pontuacao) VALUES(:ID_USUARIO, :ID_JOGADOR, :ID_HABILIDADE, :PONTUACAO)', array(
			":ID_USUARIO"=>$idUsuario,
			":ID_JOGADOR"=>$idJogador,
			":ID_HABILIDADE"=>$idHabilidade,
			":PONTUACAO"=>$pontuacao
		)); 
	}



	public function atualizaPontuacao($idUsuario, $idJogador, $idHabilidade, $pontuacao){
		$sql = new Sql();

		$sql->run_query('UPDATE tb_habilidade_jogador SET pontuacao = :PONTUACAO WHERE id_usuario = :ID_USUARIO and id_jogador = :ID_JOGADOR and id_habilidade = :ID_HABILIDADE', array(
			":ID_USUARIO"=>$idUsuario,
			":ID_JOGADOR"=>$idJogador,
			":ID_HABILIDADE"=>$idHabilidade,
			":PONTUACAO"=>$pontuacao
		)); 
	}



	public function exibeRanking($idUsuario){
		$sql = new Sql();

		$result = $sql->run_query('
			SELECT tb_habilidade_jogador.id_jogador, tb_jogadores.apelido, SUM(tb_habilidade_jogador.pontuacao) AS pontuacao, CAST(AVG(tb_habilidade_jogador.pontuacao) AS DECIMAL(12,2)) AS media 
			FROM tb_habilidade_jogador 
			INNER JOIN tb_jogadores ON tb_habilidade_jogador.id_jogador = tb_jogadores.id 
			WHERE tb_habilidade_jogador.id_usuario = :ID_USUARIO 
			GROUP BY tb_habilidade_jogador.id_jogador 
			ORDER BY media DESC', array(
			":ID_USUARIO"=>$idUsuario
		));

		//var_dump($result);
		//$resultado = json_encode($result);
		json_encode($result);

		return $result;
	}


	public function exibeGeneralRanking(){
		$sql = new Sql();

		$result = $sql->run_query('
			SELECT tb_habilidade_jogador.id_jogador, tb_jogadores.apelido, SUM(tb_habilidade_jogador.pontuacao) AS pontuacao, CAST(AVG(tb_habilidade_jogador.pontuacao) AS DECIMAL(12,2)) AS media 
			FROM tb_habilidade_jogador 
			INNER JOIN tb_jogadores ON tb_habilidade_jogador.id_jogador = tb_jogadores.id 
			GROUP BY tb_habilidade_jogador.id_jogador 
			ORDER BY media DESC');

		json_encode($result);

		return $result;
	}


}