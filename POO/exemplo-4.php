<?php

//Aula sobre MÉTODOS MÁGICOS.

/*
MÉTODO CONSTRUTOR:
É executado sempre que você instancia um objeto de uma classe.
No PHP é considerado um "MÉTODO MÁGICO"


Uma regra antiga para definir que um método era um "método construtor", era que o método tivesse o mesmo nome da Classe
No PHP, você podia fazer desta forma, ou chamar um MÉTODO MÁGICO iniciando por dois '_ _' EX: __construct

No PHP7, uma melhor prática é que em toda vez que formos criar um MÉTODO CONSTRUTOR, deve-se usar ' __construct'

*/


class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	//Agora vamos criar um "Método Construtor(Método Mágico)"
	//Em tese, o método construtor, resume o que fazem os métodos GETERS and SETERS

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c; 
	}


	/*
	Também temos outro método mágico que é o Método __destruct, 
	que destroi um objeto. Por padrão é sempre executado no FINAL do documento.
	*/
	public function __destruct(){
		var_dump("Destruir");
	}



	//Outro método mágico: __toString(). Usado para converter os atributos em string.
	//Usando quando, por exemplo, for usado o echo para chamar o $objeto instanciado
	public function __toString(){
		
		return $this->logradouro . ", ". $this->numero . ", ". $this->cidade;
		
	} 




}


$meuEndereco = new Endereco("Rua Bartolomeu Portela", "10", "Rio de Janeiro");

var_dump($meuEndereco);



//Abaixo , é uma outra forma de chamarmos o método __destruct, usando unset($nomeDoObjeto);
//Porem, como dito anteriormente, ele é por padrão executado automaticamente no final do documento
unset($meuEndereco);


//Lembrando que para poder funcionaro o echo $meuEndereco é preciso comentar a linha 66 onde eu destruo o objeto $meuEndereco
echo "<br/>";
echo $meuEndereco;


?>