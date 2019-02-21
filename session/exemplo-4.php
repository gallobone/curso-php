<?php

// Neste exemplo, será mostrado como forçar, via programação, que o servidor crie uma nova sessão


//Como recuperar uma sessão através do ID?
session_id('7dnad4dmhdsqtmlbh4s31c7vh6'); 
/*
Neste exemplo copiei o ID da sessão que estava aberta em uma guia padrão, e vou recuperar essa sessão em uma guia anônima,
uma vez que ja sei qual é o id da sessão desejada (session_id('7dnad4dmhdsqtmlbh4s31c7vh6');)
*/

require_once("config.php");


//Esta funcão gera novamente um ID de Sessão, gera um NOVO id de sessão.
session_regenerate_id();
//Portanto, a cada vez que a pagina for atualizada, um novo ID será gerado.
/*
Essa é uma boa prática de SEGURANÇA para gerar um novo ID de sessão, por exemplo, a cada vez que um cliente logar no seu site. Poderia ser
colocado em um arquivo valida.php, por exemplo.
Isso evitaria que alguém, mal intencionado, pudesse atraves de um ID roubado, acessar o sistema ativo em uma sessão de outra pessoa.
*/


//Agora vamos verificar, através da funcao session_id(), se o novo ID foi gerado.
echo session_id();



var_dump($_SESSION);



?>