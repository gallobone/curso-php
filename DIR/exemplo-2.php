<?php


/*
Abaixo, usamos a function scandir, que scaneia, verifica o que temos dentro do diretorio desejado.
Esta function retorna um array();
*/
$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {
	
	/*Abaixo , usamos a function de veririfição 'in_array', que retorna boleano. No caso ela recebe dois parametros, o "needle", 
	que é onde voce deseja procurar, e um segundo parametro haystack, que é o que voce deseja procurar no primeiro parametro.
	Melhor explicando: procure no needle $img o haystack ".", ".."
	
	Contudo, como retorna um booleano, fizemos uma validção para ver se retorna FALSE, portanto iniciamos com o sinal de exclamação !in_array()
	*/
	if(!in_array($img, array(".",".."))){
		

		//a varivel $filename retorna o path completo do arquivo nesse caso. Ex: images/nomedaimagem.jpg
		$filename = "images".DIRECTORY_SEPARATOR . $img;

		/*Abaixo usamos mais uma function dentro da variavel $info. A function pathinfo, que retorna informações do arquivo, como extensao,
		nome do diretorio em que se encontra, nome base do arquivo, nome do arquivo sem extensao*/
		$info = pathinfo($filename);

		//abaixo adicionamos à variavel $info, a function filesize, que retorna o tamnho do arquivo
		$info["size"] = filesize($filename);
		//abaixo add à variavel $info, a function filetime, que retorna a data de criacao do arquivo, convertida dentro de um DateTime()
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		
		$info["url"] = "http://localhost/dev/curso-php/DIR/".str_replace("\\", "/", $filename);
		//var_dump($info);

		array_push($data, $info);
	}
}

echo json_encode($data);


?>