<?php


/*Criando a classe Usuario*/
class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}


	public function loadById($id){

		/*Instanciamos o objeto sql que representa a classe Sql.php para chamar o metodo select(), que está criado lá em Sql.php
		É possível fazer isso nesse arquivo aqui, pq dentro de config.php, pelo sp_autoload_register, tanto a classe Usuario.php quanto
		a classe Sql.php estao sendo chamados. Portanto eu possso instanciar um objeto da classe Sql no arquivo Usuario.php, sem problemas.
		*/
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if(count($results) > 0) {
			
			$row = $results[0];
			
			$this->setIdusuario($row["idusuario"]);
			$this->setDeslogin($row["deslogin"]);
			$this->setDessenha($row["dessenha"]);
			$this->setDtcadastro(new Datetime($row["dtcadastro"]));
		}
	}



	//Abaixo, note que dentro do metodo nao foi usada a palavra "this", portanto este pode ser um método 'static'
	//A vantagem de ser um método static é que nao precisamos instanciar um objeto la no arquivo index.php para poder chama-lo.
	public static function getList(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}

	//Abaixo um exemplo de método de busca específica
	public static function search($login){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%".$login."%"
			));
	}


	//Abaixo um exemplo de método que valida por autenticação
	public function login($login, $password){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if(count($results) > 0) {
			
			$row = $results[0];
			
			$this->setIdusuario($row["idusuario"]);
			$this->setDeslogin($row["deslogin"]);
			$this->setDessenha($row["dessenha"]);
			$this->setDtcadastro(new Datetime($row["dtcadastro"]));
		}
		else{
			throw new Exception("Login e ou senha inválidos.");
		}

	}


	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"dessenha"=>$this->getDessenha(),
			"deslogin"=>$this->getDeslogin(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
	}
}

?>