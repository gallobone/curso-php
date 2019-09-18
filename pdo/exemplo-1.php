<?php


//Usando a interface PDO - PHP DATA OBJECT

//Aqui abaixo vamos setar a string de conexão. 
//No primeiro paramentro inserimos o banco que queremos usar, nome do banco e local.
//No segundo parametro inserimos o usuario
//No terceiro parametro inserimos a senha, que aqui no nosso caso tem senha, portanto apenas abrimos e fechamos aspas.

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//para rodar em linux, o ambiente pediu a senha, portanto criei uma nova conection que desta vez recebe o parametro de senha, caso nao fosse preciso, o objeto "$conn" teria em PDO o terceiro parametro vazio.
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root2019@Maldini33");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();



//Abaixo usamos o metodo 'fetchAll' para retornar um array com os registros de cada linha setada no banco
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//Acima o Parametro 'PDO::FETCH_ASSOC' para retornar apenas os dados associativos, ao invés de trazer os resultados com os índices também.


foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>". $key ."</strong> : " . $value . "<br/>" ;
	}   

	echo "==================================================<br/>";
}



//var_dump($results);

?>