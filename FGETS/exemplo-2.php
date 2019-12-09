<?php

//Outro exemplo de como ler um arquivo no PHP.
//Usando a function file_get_contents();


$filename = "paolo-maldini.jpg";

/*
Abaixo usamos a function file_get_contents, que lê um arquivo e retorna um valor binário e usamos tambem a function base64_encode
para formatar o retorno em codigo do tipo base64;
*/
$base64 = base64_encode(file_get_contents($filename));



/*
Aabaixo instaciamos um objeto da classe interna finfo, e usamos o metodo construtor que ela possui. Portanto usamos a constante 
FILEINFO_MIME_TYPE como parametro , que vai retornar o TIPO MIME do arquivo 
*/
$fileinfo = new finfo(FILEINFO_MIME_TYPE);


//Aqui, usamos o objeto $fileinfo para chamar o metodo file, que vai retornar o path do arquivo em parametro.
$mimitype = $fileinfo->file($filename);


//Abaixo usamos o padrao de exibição do base64 que é o prefixo abaixo dentro do 'echo'.
//echo "data:image/jpg;base64,". $base64;

//Agora estamos usando o prefixo de exibição padrao do base64, porem de forma dinamica.
//echo "data:".$mimitype.";base64,". $base64;


$base64encode = "data:". $mimitype .";base64,". $base64;


?>

<a href="<?= $base64encode ?>" target="_blank">Link para a imagem</a>

<img src="<?=$base64encode?>">