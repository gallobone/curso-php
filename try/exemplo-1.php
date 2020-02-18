<?php

//Aula sdobre TRY CATCH

//	Usando a Class Exception(nativa do php). Na classe Exception temos metodos como o getMessage(), getLine() etc...



try{

	throw new Exception("Houve um erro", 400);
	

} catch(Exception $e){
	
	//Aqui estamos dando echo e formatando pra JSON (em array) os dados acessados pelos metodos abaixo.
	echo json_encode(array(

		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()


	));


}

?>