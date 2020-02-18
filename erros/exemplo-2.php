<?php


//Function error_reporting() usada para manipular a exibição dos erros que voce quer que sejam ou nao exibidos.

//E_ALL constante que retorna todos os Errors

//E_NOTICE constante que retorna todos os NOTICES de erros.

//E_WARNING constante que retorna todos os Warnings 


error_reporting(E_ALL & ~E_NOTICE);


//abaixo podemos forçar ou nao um erro.
//Caso a página NÃO receba o parametro NOME por Querystring, o php vai retornar um NOTICE
$nome = $_GET["nome"];

echo $nome;

//Portanto, lembramos que usando o error_reporting, podemos configurar se queremos ou nao exbir , por exemplo, o NOTICE.



?>