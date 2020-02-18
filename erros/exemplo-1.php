<?php


function error_handler($code, $message, $file, $line){

	echo json_encode(array(
		'code'=>$code,
		'message'=>$message,
		'file'=>$file,
		'line'=>$line
	));

}



//Esta function abaixo retorna o cabeçalho de erros definidos em uma função
set_error_handler("error_handler");



//Aqui estamos forçando o erro , a tentar dividir 100 por 0
echo 100 / 0;





?>