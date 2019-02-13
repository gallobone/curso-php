<?php
//VARIÁVEIS PRÉ-DEFINIDAS OU ARRAYS SUPERGLOBAIS


//QUERYSTRING : É o que vem depois da url, geralmente são os parametros passados após o sinal de "?";
//Exemeplo: http:localhost/gallobone/example-4.php?a=123&b=456

//TODA INFORMAÇÃO QUE VIER DE QUERYSTRING SEMPRE SERÁ TEXTO(STRING), VINDO DE $_GET OU $_POST;

//PORÉM, É POSSÍVEL FAZER UM CAST(CONVERTE PARA OUTRO TIPO DE DADO). BASTA INSERIR O TIPO DE DADO NA FRENTE DA VARIÁVEL PRÉ-DEFINIDA;


//$nome = $_GET["a"];

//ABAIXO UM EXEMPLO COM CAST, CONVERTENDO PARA INT:
$nome = (int)$_GET["a"];

var_dump($nome);

// Outro tipo de superglobal, a variável $_SERVER[] 
//$_SERVER[] PEGA INFORMAÇÕES DO AMBIENTE, NAO SÓ DO SERVIDOR.PEGA INFORMAÇÕES DO USUÁRIO E DO SERVIDOR.
$ip = $_SERVER["REMOTE_ADDR"];
$getName = $_SERVER["SCRIPT_NAME"];

echo $ip. " <br/>";
echo $getName;


//ALEM DESSES EXAMPLOS EXISTEM MUITOS OUTROS DE VARÁVEIS PRE-DEFINIDAS OU SUPERGLOBAIS.



?>