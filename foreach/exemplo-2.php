<h2>Formulário 1</h2>
<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
</form>

<br/>



<!-- Neste exemplo estamos de foreach utilizando o $_GET (que é um 'array superglobal')

Lembrando que o $_GET é o padrão do php para ler, por exemplo formularios, no caso de não se usar o atributo METHOD(onde poderiamos definir get ou post) no form.

Portanto, no exemplo abaixo estamos utilizando $_GET

$_GET, Requisição que envia os dados como uma string, através da URL(de forma parametrizada)
$_POST, Requisição que é encapsulada junto ao corpo da requisição HTTP e não pode ser vista, envia os dados de forma oculta.

-->

<?php

if(isset($_GET)){
// Abaixo temos o array superglobal $_GET, temos $key(que é a chave do foreach e representa os atributos NAME dos formularios), e temos $value, 
// que traz o valor inserido nos campos

	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo : " . $key . "<br/>";
		echo "Valor do campo é : " . $value;
		echo "<hr>";
	}
}
	


?>