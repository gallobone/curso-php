<?php


/*
Abaixo, usamos a function scandir, que scaneia, verifica o que temos dentro do diret´´orio desejado.
Esta functio retorna um array();
*/
$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {
	
	if(!in_array($img, array(".",".."))){
		
		$filename = "images".DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/dev/curso-php/DIR/".str_replace("\\", "/", $filename);
		//var_dump($info);

		array_push($data, $info);
	}
}

echo json_encode($data);


?>