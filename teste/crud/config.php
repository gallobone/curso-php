<?php

//echo "teste de chamada de arquivo";

//Usando a function spl_autoload_register recebendo uma função anonima como parametro
//spl_autoload_register() vai ler todos os arquivos que estao no diretorio class e inseri-los
spl_autoload_register(function($className){

	$filepath = "class".DIRECTORY_SEPARATOR. $className. ".php";

	/*usando a function file_exists() para verificar se um arquivo existe*/
	if(file_exists($filepath)){
		
		//Portanto, desta forma aqui embaixo, estamos incluindo de forma dinamica, todas os arquivos que estão dentro do diretorio 'class'
		require_once($filepath);
	};

})


?>