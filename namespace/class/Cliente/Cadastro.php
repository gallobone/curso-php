<?php

/**/
/* 
	Usando o comceito de NAMESPACE


	Usamos a palavra NAMESPACE antes do nome do space(SUB DIRETÓRIO) que estão armazenadas nossas outras classes.

	
	OBS:

	Uma sugestão de organização para os projetos, é que tenhamos uma estrutura da seguinte maneira:
 	
 	1) Um diretório principal de classes. Exemplo: "classes", onde iremos ter os arquivos de classes genéricas com o que poderemos usar para 
 	qualquer coisa.

 	2) Um sub-diretório com as classes mais específicas, e aí obrigatoriamente já tem os seus proprios namespaces
	 
*/





//No exemplo abaixo, com a declaração "namespace Cliente",  estamos dizendo que ESTE arquivo está dentro do "sub-diretório" Cliente.
namespace Cliente;


/*
Sendo assim, agora eu posso fazer com que esta minha classe, deste arquivo Cadastro.php(que está no sub-diretório CLIENTE), 
herde a classe Cadastro que está dentro do meu "DIRETÓRIO-PAI", chamado 'CLASS'.

*/


//Portanto: class Cadastro (do sub diretorio Cliente) extends \Cadastro (classe que está no diretorio raiz , class)
class Cadastro extends \Cadastro {
	
	public function registrarVenda(){
		//Lembrando que o getNome() abaixo, está vindo junstamente da classe principal Cadastro, do diretorio 'class'
		echo "Foi registrada uma venda para o cliente ". $this->getNome();
	}
}


?>