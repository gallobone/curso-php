<?php

$conn = new mysqli("localhost", "root", "root2019@Maldini33", "dbphp7");

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

$stmt->bind_param("ss",$login, $pass);

$login = "user";
$pass =  "Paolo123";



$stmt->execute();





?>