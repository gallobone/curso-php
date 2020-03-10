<?php


/**
 * 
 criando a classe Sql que extende a classe nativa do php, a classe PDO
 */
class Sql extends PDO
{
	private $connectionString;


	public function __construct()
	{
		$this->connectionString = new PDO("mysql:host=localhost;dbname=db_sports", "root", "root2019@Maldini33");
	}
}





?>