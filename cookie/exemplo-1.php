<?php

//Aula sobre COOKIES

$data = array(
	"empresa" => "INFOBASE",
	"funcionario" => "Orsi",
	"cargo" => "analista"
);


setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>