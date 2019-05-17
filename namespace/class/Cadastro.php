<?php

class Cadastro {

	private $nome;
	private $email;
	private $senha;


	//geters
	public function getNome():string{
		return $this->nome;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function getSenha():string{
		return $this->senha;
	}

	//seters
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}




	//Agora criamos um metodo magico __toString() 
	public function __toString(){
		/*
		Abaixo estamos dizendo que ele vai retornar um JSON, com os 3 atributos privates da nossa classe, 
		atraves de json_encode(). Portanto, ao usarmos o json_encode(),	ele deve sempre receber um array como 'param' */
		//Lembrando que o json é nada mais nada menos do que um array (ou um objeto com seus atributos)
		return json_encode(array(
			//no array estamos retornando as chaves e atribuindo seus valores atraves dos metodos SETERS
			"nome" => $this->getNome(),
			"email" => $this->getEmail(),
			"senha" => $this->getSenha()

			));
	}
}



?>