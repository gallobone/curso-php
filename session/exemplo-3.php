<?php

require_once("config.php");

echo session_id();
/* 
Esta funcao retorna o ID da sua sessão, criado pelo SERVIDOR.

Esse ID não se repete. o Servidor cria um arquivo temporário que armazena essa informação.
Caso você acesse uma janela anonima, ou um outro browser, outro ID será criado, pois o servidor entende que uma nova sessão
foi criada, a partir de um outro acesso, um acesso diferente. 

*/


?>