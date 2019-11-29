<?php


//No if abaixo usamos a function is_dir() que verifica se existe um diretorio com o nome passado no parametro.
//No exemplo abaixo, caso a function is_dir()retorne FALSE, ele cria um diretorio chamado "images", através da function mkdir();
if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if(!in_array($item, array(".", ".."))){

		//Abaixo a function unlink , que serve para apagar diretorios ou arquivos.
		unlink("images/". $item);
	}
}

echo "OK";


?>