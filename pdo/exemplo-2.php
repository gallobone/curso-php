<?php

//Realizando um INSERT no banco , usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");


$login = "Jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso!";

?>