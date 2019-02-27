<?php

/*
Nesta aula vamos criar exemplos de functions usando PARAMETROS. Portanto mostraremos 
exemplos de funcoes que recebem PARÂMETROS, OU ARGUMENTOS(conceitualmente tambem podemos definir desta forma) .
*/

//Na function abaixo, "$texto" é o parametro(ou argumento) que a funcao ola recebe.
function ola($texto){

	return "Olá $texto!<br/>";
}

echo ola("Venezia");
echo ola("Milano");
echo ola("Roma");


echo "<br/>";
echo "<br/>";

//////////////////////////////////////////////////////////////////////////
//No exemplo abaixo, vamos usar uma funcao que recebe 2 parametros.
function ola2($cidade, $periodo){
	return "Ciao $cidade, $periodo!<br/>";
}


echo ola2("Venezia","Buongiorno");
echo ola2("Roma","Buaonassera");
echo ola2("Verona","Buon Pomeriggio");



echo "<br/>";
echo "<br/>";

//////////////////////////////////////////////////////////////////////////
/*
No exemplo abaixo, vamos mostrar como definir valores padrões(iniciais/defaults) para os paramêtros das funções.
Os parametros que recebem um valor padrão ($pasta="spaghetti"), por exemplo, devem ser colocados sempre por último, 
na chamada da função.
Já os argumentos que não tem um valor default definido, devem ficar sempre alinhados à esquerda dos parametros chamados na funcao,
pois estes são considerados 'argumentos obrigatórios'
Veja o exemplo abaixo:
Observe que $nome, é o primeiro argumemto chamado na function, pois é o único que nao tem um valor padrao recebido/definido, ou seja
é um ARGUMENTO OBRIGATÓRIO
*/
function ola3($nome, $pasta="Spaghetti", $squadra="Juventus"){
	return "Ciao, amici! Me chiamo $nome, la mia pasta preferita è $pasta e la squadra di quale io sono tifoso è $squadra!";
}

echo ola3("Gallo", "Ravioli", "Milan");

/*
No echo abaixo, chamei a function ola3(), passando apenas um argumento, que corresponde à $nome, pois é o único 
"argumento obrigatório", e sendo assim, os outros dois argumentos($pasta e $squadra), caso eu não os declare na function,
serão interpretados com os respectivos 'valores padrão', portanto não é preciso chama-los tambem.
*/

echo ola3("Gallo");

?>