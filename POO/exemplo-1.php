<?php


//Aula sobre Classes - Criando uma Classe

/*
Existe uma convenção para criar os nomes das classes. Todo nome de class deve começar com letra MAIÚSCULA, se ela tiver 
um nome composto, tambem deve se fazer desse jeito. Por exemplo, a classe DateTime(), é uma classe de nome composto
*/


class Pessoa {

	//agora vamos criar os atributos dessa classe Pessoa
	//Usamos a palavra reservada 'public' para definir o tipo de encapsulamento ou tipo de 'acesso'.

	public $nome;//atributo
	
	public function falar(){//método

		return "o meu nome é ". $this->nome;
		/*
		aqui usamos o "$this", que é uma variável interna do PHP. É usada para referenciar atributos e métodos de uma classe, 
		e usá-los dentro de outros métodos; Portanto o '$this' representa o '$', que viria antes do nome do atributo.
		Ex: "$this->nome" ao invés de "$this->$nome"
		*/
	}
}


//Abaixo estamos instanciando um objeto da classe Pessoa;

//Portanto através do objeto $glaucio, que agora REPRESENTA a classe Pessoa, podemos acessar o atributo $nome e inputar lhe um valor
$glaucio = new Pessoa();
$glaucio->nome = "Gláucio Daniel";// o sinal "->" acessa o atributo  da classse, através do objeto instanciado. 
//Portanto $nomeDoObjeto->nomeDoAtributo
//Repare que quando acessamos o nome do atributo atraves de um objeto, retiramos o '$' do nome do atributo.

//Podemos tambem acessar atraves do objeto $glaucio, o metodo falar
echo $glaucio->falar();
/*
OBS: Como, dentro da classe, o retorno do método falar, não possui o echo, na linha acima temos que usar echo para retornar o valor da
tring na tela.
*/


?>