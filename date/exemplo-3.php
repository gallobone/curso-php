<?php

//Nesta aula falaremos sobre a function setlocale();


/*

Na funcao setlocale(), abaixo, usamos a CONSTANTE LC_ALL, como primeiro parametro, e no segundo parametro, devemos informar
qual é o padrão de linguagem que queremos usar
Porém, existem padrões que podem variar, dependendo de onde sua aplicação estaja rodando.
Pode estar rodando em um ambiente LINUX, pode estar rodando em um ambiente WINDOWS e tambem 
pode estar rodando em uma plataforma com padrão de encode UTF-8;


Portanto no exemplo abaixo, setamos como 'segundo parametro', tres possibilidades de padrão de linguagem, que vão funcionar de acordo
com o ambiente em que a aplicação estiver rodando.

OBS: LC_ALL siginifica que você deseja mudar todo a configuração de local para o que vem definido no segundo parametro
*/
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");



/*Agora que o setlocale() foi executado, podemos por exemplo, atraves da function strftime(), 
retornar dia da semana e mes em portugues

Abaixo usamos a function strftime(), que pode receber varios tipos de parametros.
no exemplo abaixo estamos usando %A(que retorna o dia da semana) e %B(que retorna o mês);


Vejamos:
*/
echo strftime("%A %B");

//Dica: Veja outros recursos de parametros para a funcao strftime() na documentacao do PHP

?>