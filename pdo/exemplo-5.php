<?php

//Realizando uma TRANSAÇÃO no banco , usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");


//Aqui setamos/definimos/criamos uma TRANSAÇÃO, e a partir dessa variável $conn vamos controlar as etapadas da TRANSAÇÃO
$conn->beginTransaction();
/*
Criando o comando de DELETE FROM com PDO. Bem simples*/
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");


$id = 5;


$stmt->execute(array($id));

//Aqui através da VARIÁVEL DE CONEXÃO( $conn ) faremos um ROLLBACK, portanto a querie vai ser executada, porem depois cancelada/revertida.
//$conn->rollback(); //comentei o rollback para poder logo abaixo permitit o commit 

//Aqui através da VARIÁVEL DE CONEXÃO( $conn ) faremos um COMMIT, portanto a querie vai ser executada e CONFIRMADA somente quando chamarmos o COMMIT.
$conn->commit(); //OBS: Por termos iniciado uma TRANSAÇÃO, se nao executarmos nunca o commit(); a querie nao vai ser aplicada no banco.

echo "Delete OK!";

?>