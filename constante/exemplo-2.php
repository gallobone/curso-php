<?php

//Neste exemplo, vamos criar uma CONSTANTE que tem como valor um ARRAY (novidade do php7)

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'teste'
	]);


print_r(BANCO_DE_DADOS);


?>