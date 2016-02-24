<?php

$x = 10;
$y = 5;

$soma = $x + $y;
$subtrai = $x - $y;
$multiplica = $x * $y;
$divide = $x / $y;

#echo $soma;

# --------------

$x++; # $x = $x + 1
$x+=5; #$x = $x + 5;

$x--;
$x-=2;

#echo $x;

#-------------- Concatenar

$primeiro_nome = "School";
$ultimo_nome = " of Net";

#echo $primeiro_nome.$ultimo_nome. " - Muito bom!";
$primeiro_nome.= " of Net";

echo $primeiro_nome;



$idade = 29;

if ($idade >= 18) {
    echo "maior de Idade";
} else {
    echo "menor de idade";
}

echo $idade >= 18 ? "maior de Idade" : "menor de idade";

?>