<?php

//verificando se o cookie criado no exmplo-1.php existe


if(isset($_COOKIE["NOME_DO_COOKIE"])){

	//var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

	//Aqui abaixo vai retornar um objeto com todas as informações inputadas no cookie
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->empresa."<br/>";
	echo $obj->funcionario."<br/>";
	echo $obj->cargo."<br/>";

};



?>