<?php

//Realizando um DELETE no banco , usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

/*
Criando o comando de DELETE FROM com PDO. Bem simples*/
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 2;


$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados APAGADOS com sucesso!";

?>