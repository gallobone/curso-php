<?php


//Nesta aula vamos aprender como renomear/mover um arquivo usando a function "rename"
//Vejamos o exemplo abaixo

$dir1 = "folder_01";
$dir2 = "folder_02";


//Abaixo, nas duas condições, validamos se existem os diretorios com os nomes nas variaveis e caso nao existam, criamos eles
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);


$filename = "README.txt";

if(! file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
	
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	fwrite($file, "Foi criado em: ". date("Y-m-d H:i:s"));

	fclose($file);
}


//function rename: primeiro parametro recebe o path e nome do arquivo, e segundo parametro recebe o path pra onde vai e com que nome vai
rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);

echo "Arquivo movido com sucesso" ;


?>