<?php
//Aula sobre CURL - Biblioteca Client URL 

//Basicamente CURL é uma biblioteca (que as linguagens de programação tem) usada para fazer requisições/consumir dados de uma outra aplicação/sistema e obter conteúdo remoto;


$cep = "01001000";
$link = "https://viacep.com.br/ws/".$cep."/json/unicode/" ;

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

$data = json_decode($response, true);


//print_r($data);
print_r($data["localidade"]);




?>