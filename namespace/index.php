<?php

require_once("config.php");


//Desta forma aqui abaixo, estou chamando a classe "Cadastro", que está dentro da pasta(NAMESPACE) Cliente;
use Cliente\Cadastro;
/* Sendo assim, na linha abaixo, quando o objeto $cad está sendo instanciado, determinamos que ele passará a representar 
a classe CADASTRO que está dentro da pasta CLIENTE, ao invés da classe CADASTRO que está na pasta 'CLASS' */

//Instaciamos o OBJETO da classe CADASTRO
$cad = new Cadastro();


//Através do objeto, estou chamando os METODOS SETERS pra setar valores para os atributos da classe
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");


//echo $cad;


$cad->registrarVenda();

?>