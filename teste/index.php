<?php


/**
 * 
 EXECERCICIOS
 */
class Sql extends PDO
{
	
	private $conn;


	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root2019@Maldini33");

		if($conn->connect_error){
			echo "Error: ". $conn->connect_error;
		}
		else{
			echo "Conexão bem sucedida com o banco de dados<br/><br/>";
		}
	}

	public function consultaDados(){

		$stmt = $this->conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

		$stmt->execute();


		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($results as $row) {
			
			foreach ($row as $key => $value) {
			
				echo "<strong>". $key ."</strong> : " . $value . "<br/>";

			}
			echo "==========================<br/>";
		}

		
	}


	
}





$obj = new Sql(); 

$obj->consultaDados();


?>