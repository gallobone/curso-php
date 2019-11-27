<?php


/**
* 
*/

//Aqui criamos a classe USUARIOS que terá os atributos de acordo com os campos da TB_USUARIOS
//portanto, os atributos serao PRIVATES, pq pertencem somente a esta classe...e somente serao manipulados por ela.
class Usuarios {

	private $idusuario;
	private $login;
	private $senha;
	private $datacadastro;

	/*** SETERS ***/
	public function setIdusuario($param){
		$this->idusuario = $param;
	}

	public function setLogin($param){
		$this->login = $param;
	}

	public function setSenha($param){
		$this->senha = $param;
	}

	public function setDatacadastro($param){
		$this->datacadastro = $param;
	}

	/******* GETERS ******/

	public function getIdusuario(){
		return $this->$idusuario;
	}

	public function getLogin(){
		return $this->$login;
	}

	public function getSenha(){
		return $this->$senha;
	}

	public function getDatacadastro(){
		return $this->$datacadastro;
	}





	public function setData($data){
		
		$this->setIdusuario($data["idusuario"]);
		$this->setLogin($data["login"]);
		$this->setSenha($data["senha"]);
		$this->setDatacadastro(new Datetime($data["dtcadastro"]));
	}


	public function __toString(){
		//echo "teste to_string";
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"login"=>$this->getLogin(),
			"senha"=>$this->getSenha(),
			"datacadastro"=>$this->getDatacadastro()->format("d/m/Y H:i:s")
		));
	}


	//INSERT
	public function insert(){

		//$this->setLogin("Fernando");
		//$this->setSenha("gallobone");
		$this->setDatacadastro(new Datetime());


		$sql = new Sql();

		$sql->select("INSERT INTO tb_usuarios (login, senha, dtcadastro) VALUES (:LOGIN, :SENHA, :DATA)", array(
				"LOGIN"=>$this->login,
				"SENHA"=>$this->senha,
				"DATA"=>$this->datacadastro->format('d:m:y')
			));

	}


	//DELETE
	public function delete($id){

		$this->setIdusuario($id);
		
		$sql = new Sql();

		$sql->select("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
				"ID"=>$this->idusuario
			));

	}


	//UPDATE
	public function update($id){

		$this->setIdusuario($id);
		$this->setDatacadastro(new Datetime());

		$sql = new Sql();

		$sql->select("UPDATE tb_usuarios SET login = :LOGIN, senha = :SENHA, dtcadastro = :DATA WHERE idusuario = :ID", array(
				"ID"=>$this->idusuario,
				"LOGIN"=>$this->login,
				"SENHA"=>$this->senha,
				"DATA"=>$this->datacadastro->format('d:m:y')
			));
	}
	
	
	



	// function __construct(argument)
	// {
	// 	# code...
	// }
}

?>