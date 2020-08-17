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


	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($param){
		$this->usuario = $param;
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

	public function validaLogin($usuario, $senha){

		$sql = new Sql();

		$results = $sql->run_query("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
			":LOGIN"=> $usuario,
			":SENHA"=> $senha
			));


		if(count($results) > 0){
			echo "LOGIN VÁLIDO<br/>";
		}
		else{
			echo "LOGIN INVÁLIDO";
		}

	}



}



?>