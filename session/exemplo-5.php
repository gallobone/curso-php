<?php

//Aula de funções usadas pra Sessão.
//Dica dos professores: Consultar a documentação do php.net, e visualizar as funções disponíveis para trabalhar com sessão.
//Acesse:
//http://php.net/manual/pt_BR/book.session.php


require_once("config.php");


//Essa function "session_save_path(), retorna o caminho de onde está o arquivo/dados criado(s) quando a sessão foi startada"
echo session_save_path();

echo "<br/>";


//

/*
Abaixo, usamos a function session_status(), no parametro deve receber vazio(void), e retorna um INT (0, 1 o 2), e/ou retorna também
as constantes pré-definidas que representam esses inteiros, indicando o STATUS da sessão

PHP_SESSION_DISABLED - igual a 0 
PHP_SESSION_NONE - igual a 1
PHP_SESSION_ACTIVE - igual a 2

Portanto, essa function session_status() retorna uma dessas constantes(que são do tipo INT) acima. */
var_dump(session_status());
echo "<br/>";



echo session_status();
echo "<br/>";


switch (session_status()) {
	case 0: //conforme explicado acima, a constante PHP_SESSION_DISABLED tambem poderia ser usada aqui, no lugar do 0
		echo "Sessão desabilitada";
		break;

	case 1: //conforme explicado acima, a constante PHP_SESSION_NONE tambem poderia ser usada aqui, no lugar do 1
		echo "Sessão habilitada, mas nao iniciada";
		break;

	case 2: //conforme explicado acima, a constante PHP_SESSION_ACTIVE tambem poderia ser usada aqui, no lugar do 2
		echo "Sessão habilitada e iniciada";
		break;
	
	
}


?>