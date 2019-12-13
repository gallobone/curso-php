<?php
//Aula sobre DOWNLOAD de arquivos no PHP
//Usando o file_get_contents



/*
Nessa variável abaixo, nos vamos inserir o path da imagem que queremos baixar. //Por exemplo, pode ser um caminho de uma imagam
qualquer em qualquer site */
$link = "https://mdp-media.acmilan.com/upl/entities/story/Story-App-Mobile-1.png";


/*
Abaixo na variavel $content, usamos a function file_get_contents(), que lê o binário do arquivo desejado. Co
Como parametro voce pode passar um arquivo qualquer(path local por exemplo), ou pode passar tambem uma URL, por exemplo.*/
$content = file_get_contents($link);

//var_dump($content);


//Na variável parse, utilizamos a function parse_url(), que transforma o que está numa url em um arquivo real.
$parse = parse_url($link);


//Aqui usamos a function basename() e usando a chave["path"], que pega apenas o "nome e a extensao" do arquivo desejado.
//var_dump(basename($parse["path"]));
$basename = basename($parse["path"]);


//Aqui abaixo, estamos criando o arquivo
$file = fopen($basename, "w+");

//Aqui usamos a function fwrite para reconstruir localmente a imagem que roubamos de outro site.
//Portanto passamos $file e $content, que significa: 'crie com esse nome, o conteudo que foi roubado'
fwrite($file, $content);

fclose($file);


?>



<img src="<?=$basename?>">