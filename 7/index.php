<?php
/*
 * Primeira versão da função
 *
function soma() {
  echo 5 + 5;  
}
*/

/*
 * Função um pouco melhorada.
 *
function soma() {
    $x = 5;
    $y = 6;
    echo $x + $y."<br>";
}
 * for($i=0;$i<15;$i++)

 * soma();
*/

/*
$x = 10; //Global para todo o documento.
function soma($x,$y) {  //function soma($x=0,$y=0)
    // $x -> escopo. Trabalha apenas dentro dessa função.
    echo $x + $y;
}

soma(2,5);  //formatos que podemos passar os parametros, Int, "string", False/true, null, array()
*/



function media($p1,$p2,$p3,$p4) {
    $resultado = ($p1+$p2+$p3+$p4)/4;
            return $resultado;
}
//$media = media(9,10,8,5);
$alunos[0]["nome"] = "Pedrinho";
$alunos[0]["media"] = media(3,2,4,7);

$alunos[1]["nome"] = "Joãoinho";
$alunos[1]["media"] = media(4,8,10,7);

$alunos[2]["nome"] = "Barney";
$alunos[2]["media"] = media(3,9,8,7);

$alunos[3]["nome"] = "Paulo";
$alunos[3]["media"] = media(1,3,2,4);


for($i=0;$i<count($alunos); $i++) {
        echo "<b>Nome do Aluno:</b> {$alunos[$i]['nome']}<br>";
if ($alunos[$i]["media"] < 5) {
    echo "<b>Média Final:</b> <font color = red>{$alunos[$i]['media']}</font><br><br>";
}
elseif ($alunos[$i]["media"] > 5) {
    echo "<b>Média Final:</b>{$alunos[$i]['media']}<br><br>";
}
}
//echo "</font>";
//if ($alunos[0]["media"] < 5) {
  //  echo "<b>Média Final:</b> ".$alunos[$i]["<font color = red>media</font>"]."<br><br>";
//}

//echo "A nota que você tirou foi: ".$media; 









?>