<?php
//SESSÃO SOBRE MANIPULAÇÃO/LEITURA E CRIAÇÃO DE ARQUIVOS COM O PHP

//Aula LENDO E MANIPULANDO pastas com PHP7;

//Abaixo criamos a variável $name que recebe o nome de um diretório;
$name = "images";


/*
Aqui abaixo usamos o operador "!", que representa uma negação. 
Portanto estamos validando, através da function do php "is_dir"(que verifica se existe um diretorio) 
"se não existe o diretório atribuído à variavel $name", faça algo.
*/


if(!is_dir($name)){
	//aqui abaixo usamos a function mkdir, que cria um diretório;
	mkdir($name);
	echo "Diretório $name criado com sucesso";
}
else{

	//Apenas para teste, usamos a function rmdir, que remove diretorios;
	//rmdir($name);
	echo "Diretório $name já existe<br/> Porém foi removido agora mesmo!";
}
?>