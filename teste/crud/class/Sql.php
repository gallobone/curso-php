<?php


/*
* Criamos a classe Sql que extende a classe PDO, nativa do PHP
*/
class Sql extends PDO{

	private $connectionString;


	public function __construct(){
		$this->connectionString = new PDO("mysql:host=localhost;dbname=dbphp7gallo", "root", "");
	}


	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			
			$this->setParam($statment, $key, $value);
		}
	}

	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);


	}


	public function query($rawQuery, $params = array()){
		$stmt = $this->connectionString->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();
		return $stmt;
	}


	//Aqui vamos criar o metodo que executa as queries

	//SELECT QUERY
	public function select($rawQuery, $params = array()):array
	{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


}

?>