<?php

//CHAMADA/INSTRUÇÕES INCLUDE E REQUIRE

//include 'inc/exemplo-1.php';
require 'inc/exemplo-1.php';

/*Diferenças entre Include e Require
INCLUDE: Tenta fazer com que a aplicação funcione, mesmo se o arquivo
chamado esteja com erro ou de repente nao exista

Include te permite o INCLUDE_PATH, que é tipo uma pasta, que você
pode mapear fazendo o seu repositório de arquivos.
Ele também permite o include dinâmico, que é chamar um arquivo
de uma outra URL, um arquivo de um outro site, 
por exemplo(que não é uma boa prática). 
Uma melhor prática é acessar API´s(será falado mais a frente).

REQUIRE: OBRIGA  a inclusão do arquivo e só faz com que a aplicação funcione, 
caso o arquivo chamado exista e esteja correto.


OUTRAS FORMAS DE USAR:

REQUIRE_ONCE ou INCLUDE_ONCE
Evita chamada duplicada(que gera erro)
Por exemplo, voce chama dois arquivos na sua página, 
e um deles já está chamando o outro...
Usando o require_once, o php evita a duplicação, que geraria um fatal error.




*/
$resultado = somar(10, 20);


echo $resultado;

?>