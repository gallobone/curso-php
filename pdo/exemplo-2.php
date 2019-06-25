<?php

//Realizando um INSERT no banco , usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

/*
Criando o comando de insert com PDO. Repare que nos parametros dos valores inseridos, nao utilizamos aspas simples, por uma questao de seguranca
(para evitar ataques hackers por string de aspas) que o proprio PDO comtempla. Portanto inserimos os parametros iniciando com ':'    */
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");


$login = "Jose";
$password = "123456";


/*
Metodo bindParam , associa os parametros conforme o exemplo abaixo
Passamos o 'alias' que criamos e na seunda 'coluna' o valor que atribuimos à variável
*/
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso!";

?>