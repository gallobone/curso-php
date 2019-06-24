<?php

//$conn = new mysqli("localhost", "root", "root2019@Maldini33", "dbphp7");
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
//PARAM MYSQLI_ASSOC , TRAZ SO OS NOMES DAS STRINGS
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	
	//var_dump($row);
	array_push($data, $row);

}


echo json_encode($data);



?>