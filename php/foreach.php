<?php
$numeros = array(
	"pi"=> 3.14159,
	"euler"=> 2.71828,
	"omega"=> 1.61803,
	"raiz de 2"=> 1.41421
); 

foreach ($numeros as $chave => $valor) { 
	echo $chave . " é igual a " . $valor;
}
/*
	Neste exemplo, tanto o índice (chave) quanto seu valor foram armazenados em variáveis temporárias chamadas, respectivamente, de $chave e $valor, lembrando que estes nomes poderiam ser qualquer outro.
*/
?>