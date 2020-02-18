<?php

function tratarNome($name){

	if(!$name){

		throw new Exception("Nenhum nome foi informado.", 1);


		
	}

	echo ucfirst($name). "<br/>";


}

try{

	tratarNome("Gallo");
	tratarNome();


}catch(Exception $e){

	echo $e->getMessage();

//Lembrando que finally é uma condição opcional do Try Catch. Essa condição sempre será executada independente de executar o Try ou o Catch.
}finally{

	echo "Executou o Try Catach!";

	//Faça uma ação

}

?>