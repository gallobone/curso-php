<?php

$image = imagecreatefromjpeg('certificado.jpg');

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 150, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Paolo Maldini", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em:"). date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");


//Desta forma abaixo, a funcao imagejpeg() somente printa a imagem na tela
//imagejpeg($image);

/*
Porem, da maneira abaixo, usando um segundo parametro na funcao imagejpeg(), 
vc pode gerar a imagem (com o nome que quiser) dentro do diretorio, ao inves de somente printa-la na tela.*/
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 50);
//OBS: O terceiro parametro desta funcao acima corresponde à porcentagem de qualidade do arquivo, e portanto, acima, usamos 50 por cento;

//E abaixo, usamos o imagedestroy para liberar a alocação de memoria.
imagedestroy($image);

?>