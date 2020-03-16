<?php


/**
 * 
 criando a classe Sql que extende a classe nativa do php, a classe PDO
 */
class Sql extends PDO
{
	private $connectionString;


	//Seta a conexão com o banco de dados através da INTERFACE PDO
	public function __construct()
	{
		try {
			//Criando o objeto de conexao com os banco de dados
			$this->connectionString = new PDO("mysql:host=localhost;dbname=db_sports", "root", "root2019@Maldini33");
			
			if(!$this->connectionString){

				throw new Exception("Error Processing Request", 1);
				
			}

		} catch (Exception $e) {
			
			echo "Erro de conexão com o banco de dados: <br/>". $e->getMessage();
		}
		
	}


	//Abaixo vamos criar OS PASSOS ESSENCIAIS PARA SE FAZER OPERAÇÕES NO BANCO DE DADOS, PORÉM DE FORMA OTIMIZADA:
	/*
    
    -----------------------------------

	CONNECTION STRING: GERALMENTE fica numa variável/objeto que consiste em criar a conexão com o banco de dados. Exemplo: 
	$db = new PDO('mysql:host=localhost; dbname=nomeDoSeuBanco', 'root', 'password');

	-----------------------------------

	- STATEMENT (declaração) geralmente é uma variável à qual se atribui como valor a instância da classe PDO, para possibilitar a execução de todas as operações(prepare, bindParam, execute) no banco de dados; Vejamos a seguir:


	Exemplo: $stmt = $db->prepare("select * from tb_users");

    -----------------------------------

	- PREPARE (É O MÉTODO ONDE VC ESCREVE A QUERIE QUE VC QUER FAZER NO BANCO DE DADOS) Exemplo: 
	
	$stmt = $db->prepare("SELECT * FROM USERS WHERE user_name = :nome");  

	//Observe que precisamos usar o $stmt para executa-lo.

	-----------------------------------
	
	- BINDPARAM() - É O MÉTODO QUE SE USA PARA 'LIGAR' OS VALORES QUE VOCÊ DEFINIR(podendo ser através de variáveis tambem) 
	COM OS CAMPOS CONTIDOS NA SUA QUERIE.
	  Exemplo:
		$stmt = $db->prepare("SELECT * FROM USERS WHERE user_name = :nome"); 
		$nome = "Gallo";
		$stmt->bindParam(':nome', $nome);

		//Observe que também precisamos usar o $stmt para executa-lo.

	------------------------------------


	- EXECUTE: É simplesmente o método que executa a sua querie já formatada. É preciso usar o STATEMENT para executá-lo.
	  Exemplo:
	  
	  $stmt->execute();

	  //Observe que também precisamos usar o $stmt para executa-lo.

	  ----------------------------------
	*/ 


	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);


	}


	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			
			$this->setParam($statment, $key, $value);
		}
	}


	public function query($rawQuery, $params = array()){
		$stmt = $this->connectionString->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();
		return $stmt;
	}


	//Aqui vamos criar o metodo que executa as queries

	//SELECT QUERY
	public function run_query($rawQuery, $params = array()):array
	{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


}


?>