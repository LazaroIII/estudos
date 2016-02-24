<?php

$x = 1; # Operador de atribuição

if($x==1) {  //Operador de comparação
    echo "Realmente 1 é igual a 1. <br  />";
}

if($x > 1) //Apenas uma operação não precisa de chaver {} (mas eu coloquei)
    echo "X é maior que 1. <br  />";


if($x < 1) {
    echo "X é menor que 1. <br  />";
}

if($x >= 1) {
    echo "X é maior ou igual a 1. <br  />";
}

if($x <= 1) {
    echo "X é menor ou igual a 1. <br  />";
}

if($x == 1 and $x < 10) {
    echo "X é igual a 1 e menor que 10 <br  />";
}

if($x == 1 or $x >= 10) {
    echo "X é = 1 ou X maior ou igual a 10 <br  />";
}

$conta = 123456;
$senha = 654321;

if($conta == 123456 and $senha == 654321) { //Exemplo de usuario e senha corretos usando "and"
    echo "Pode acessar o seu perfil <br  />";
}

if($conta == 123456 or $senha == 654321) { //Exemplo errado deixando acessar apenas com usuario ou apenas com senha 
    echo "Pode acessar o seu perfil<br  />";
}

if($conta == 123456 and $senha == 12345 ) { //Exemplo correto de senha incorreta
    echo "Senha incorreta<br  />";
}

if($conta == 654321 and $senha == 654321) { //Exemplo correto de conta incorreta
    echo "Conta incorreta!<br  />";
}
?>