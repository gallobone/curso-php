<?php


//iniciando uma essao com a function session_start();
//session_start();
require_once("config.php");

//como apagar o dado de todas as variáveis de sessao, como limpar? usando o session_unset();
session_unset();


//PARA limpar/apagar uma variável de sessão específica
unset($_SESSION['nome']);

echo $_SESSION['nome'];


//session _destroy(), apaga o valor da variável e remove o usuário da sessão
session_destroy();

// COMO APAGAR UMA VARIÁVEL DE SESSÃO???
//USANDO UM COMANDO CHAMADO session_unset();

//Ex: session_unset($_SESSION['nome']);




// Como destruir um uma varável de sessão? Usando o comando session_destroy();
// ele LIMPA/APAGA a variável de sessão e REMOVE o usuário.



?>