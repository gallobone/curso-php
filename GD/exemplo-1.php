<?php

//Aula sobre processamento de imagems com PHP, usando a biblioteca  GD (graphic Design)
//Usando a biblioteca GD é possível gerar imagens dinamicamente...

/*
Exemplo: 
- gerar um certificado de conclusao de curso
- um recibo


Outra utilidade da biblioteca GD: É possível gerar um THUMBNAIL(reduzindo o tamanho em bytes da imagem) a partir de uma determinada imagem.

*/

//ABAIXO VAMOS CRIAR UMA IMAGEM USANDO A FUNCTION HEADER();

header("Content-Type: image/png");
//Criamos a variável $image, que chama a função imagecreate(width, height); que recebe dois paremetros(altura e largura);
//A funcção imagecreate() que serve para criar o tamanho da imagem na tela
$image = imagecreate(256, 256);


/*
Nas variáveis $black e $red estamos usando a function imagecolorallocate(image, red, green, blue);
que como podemos ver, recebe os seguintes paramentros: nome da imagem, R(valor para red), G(valor pra green), B(valor para blue)
*/

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);



//Abaixo estamos usando a function imagestring(image, fontsize, x, y, string, cor da fonte);
imagestring($image, 5, 60, 120, "Curso php 7", $red);

//Aqui a function imagepng(); que printa na tela, a imagem que foi criada.
imagepng($image);


//Aqui a functon imagedestroy(), usada para destruir a imagem que foi criada.
imagedestroy($image);









?>