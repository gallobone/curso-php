<?php

//Realizando um UPDATE no banco , usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

/*
Criando o comando de UPDATE com PDO. Repare que nos parametros dos valores inseridos, nao utilizamos aspas simples, por uma questao de seguranca
(para evitar ataques hackers por string de aspas) que o proprio PDO comtempla. Portanto passamos os parametros iniciando com ':'    */
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");


$login = "Jose";
$password = "123456";
$id = 2;

/*
Metodo bindParam , associa os parametros conforme o exemplo abaixo
Passamos o 'alias' que criamos e na seunda 'coluna' o valor que atribuimos à variável
*/
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados ALTERADOS com sucesso!";

?>