<?php

/**
 * 
 */
class Login
{

	private $idusuario;	
	private $nome;	
	private $email;	
	private $usuario;	
	private $senha;
	private $dt_acesso;
	private $fl_ativo;



	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($param){
		$this->idusuario = $param;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($param){
		$this->usuario = $param;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($param){
		$this->email = $param;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($param){
	 	$this->senha = $param;
	}


	/*
	function __construct(argument)
	{
		# code...
	}
	*/

	public function validaLogin(string $usuario, string $senha):bool{

		$sql = new Sql();

		$results = $sql->run_query("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
			":LOGIN"=> $usuario,
			":SENHA"=> $senha
			));
		
		if(count($results) > 0){

			$row = $results[0];
			//print_r($row);
			//echo "LOGIN VÁLIDO<br/>";
			//echo json_encode($results);
			
			$this->setUsuario($row['nome']);
			$this->setIdusuario($row['id']);
			
			//$user = $this->getUsuario();
			//$iduser = $this->getIdusuario();

			//header("location: index.php?user=".$user);
			return true;
			
		}
		else{
			//header("location: login.php?login=false");
			//echo "LOGIN INVÁLIDO";
			return false;
		}

	}


	public function createAccount(string $nome, string $email, string $usuario, string $senha){

		$sql = new Sql();

		$results = $sql->run_query('SELECT * FROM tb_usuarios WHERE email = :EMAIL', array(
			":EMAIL"=> $email
		));

		if(count($results) > 0){
			echo "já possui cadastro";
			header("location: /dragoes/login.php?login=exists_user");
		}
		else{
			$sql->run_query('INSERT INTO tb_usuarios (nome, email, login, senha) VALUES (:NOME, :EMAIL, :LOGIN, :SENHA)', array(
				":NOME"=>$nome,
				":EMAIL"=>$email,
				":LOGIN"=>$usuario,
				":SENHA"=>$senha
			));

			/*
			$this->setEmail($email);
			$verifyEmailExistent = $this->getEmail();

			$row = $results[0];

			if($verifyEmailExistent === $row['email']){
				echo "INSERIDO";
			}
			*/

			//echo "INSERIDO";
			header("location: /dragoes/login.php?login=create_account_success");
		}
	}

}
