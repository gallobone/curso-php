<?php

//NAMESPACE: Serve para organizar as chamadas e utilizações de classes dentro do seu projeto
/*
Portanto, NAMESPACE permite que voce use classes do mesmo ou de diferentes diretorios de forma especificada e organizada

*/



//Vamos usar o ATUOLOAD 
spl_autoload_register(function($nameClass){

	var_dump($nameClass);

	$dirClass = "class";
	//Geralmente, Filename corresponde ao path completo (incluindo o nome do arquivo e a extensão), de onde está o arquivo
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	/* Observe que acima usamos a constante 'DIRECTORY_SEPARATOR', que serve para utilizar o caractere separador de diretorios ( / ), 
	em diferentes sistemas operacaionais. Portando DIRECTORY_SEPARATOR simula o que seria a '/' em outros sistemas operacionais */
	

	/* Agora vamos validar se a chamada desse arquivo encontra algo existente (TRUE).
	Lembrando que a function file_exists(filename) retorna booleano (true ou false), portanto, podemos usa-la de duas formas:
	
	if(file_exists($filename)){
		//executa algo aqui
	}

		OU

	if(file_exists($filename) === true){
		executa algo aqui
	}

	*/

	if(file_exists($filename)){
		require_once($filename);
	}
	


})


?>