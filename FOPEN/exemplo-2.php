<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin"); 

//print_r($usuarios);

$headers = array();

/* Abaixo , criamos um foreach so pra montar o cabeçalho do arquivo CSV que vamos gerar. Portanto fizemos somente o Foreach para a posição
[0] da variavel $usuarios, que retorna a consulta da tb_usuarios mais acima; */
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}
//print_r($headers);


$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) ."\r\n");

//foreach para cada linha
foreach ($usuarios as $row) {
	
	$data = array();
	
	//foreach para cada coluna
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}

	//fwrite em cada linha
	fwrite($file, implode(",", $data) . "\r\n");
}


fclose($file);
//echo implode(",", $headers);

?>