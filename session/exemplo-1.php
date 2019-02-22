<?php

/*
Variáveis de sessão
Diferente de uma variável local, a variável de Sessão pode ser enxergada em todo o código enquanto o usuário estiver conectado no 
site.
Portanto quando um usuário acessa um site,  uma sessão é criada entre o usuário e o servidor.
Essa sessão dura, normalmente 20 minutos, porém pode ser reduzida.


Por padrão, no PHP, uma sessão nao vem iniciada, portanto você precisa usar uma function para dizer que uma sessão existe.

Neste caso, usamos a function session_start();
*/

//session_start();
//chamei o aarquivo config.php atraves do require_once();
//nele esta o session_start();
require_once("config.php");



//Aqui abaixo, temos um exemplo de uma variável de sessão, cujo o nome é "nome", e o valor dela é "Hcode"
$_SESSION["nome"] = "Hcode";

//AQUI NO ARQUIVO EXEMPLO-1.php estamos criando uma sessão...

/* A sessao de fato é iniciada quando acessarmos esse arquivo..e somente depois disso, o arquivo exemplo-2.php poderá visualizar 
dados desta sessao aqui, criada no exemplo-1.php */

/*
OBS: PARA CRIAR UMA SESSÃO É PRECISO SEMPRE USAR O START_SESSION();
PORÉM TAMBÉM É POSSÍVEL CONFIGURAR ISSO NO ARQUIVO PHP.INI, PARA QUE O START DE UMA SESSÃO SEJA INICIADO AUTOMATICAMENTE


o ideal é que sempre se use o start_function(), ao invés de mexer no php.ini, porém, recomenda-se criar um arquivo de configuração, 
tipo um CONFIG.PHP, pra inserir o start_function() nele, assim como criar um arquivo FUNCTIONS.PHP, para inserir as funcoes do sistema, 
ect.



*/

?>