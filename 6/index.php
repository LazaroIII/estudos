<?php

$x[0][0] = "oi";
$x[0][1] = "posicao 1";

$y = $x;

#echo $y[0][1];

$animais = array("Gato" , "Cachorro" , "Coelho"); //Automaticamente na ordem 0-1-2-3[...]
#secho $animais[1];

$nomes = array(0=>"Lazaro" ,4=>"Paulo" ,2=>"Duda" ,3=>"Barbara" ,1=>"Lili"); //Você define a ordem
#echo $nomes[1];

$objetos = array(
    0=>array(
        0=>"Faca",
        1=>"Garfo"),
    1=>"Mesa");

#echo $objetos[0][1];


# Arrays associativos


$config = array(); //apenas definindo $config como um array *apenas dizendo que config, é do tipo array*
$config["nome"] = "School of Net";
$config["linguagem"] = "PHP";
$config["site"] = "http://www.schoolofnet.com";

#echo $config["nome"]. " - ".$config["site"];

$exemplo = array(
    "nome"=>"School of net",
    "email"=>"atendimento@schoolofnet.com"
        
    );

#echo $exemplo["nome"];
    
#print_r($exemplo);   
#var_dump($exemplo);

/*
echo $nomes[0]."<br  />";
echo $nomes[1]."<br  />";
echo $nomes[2]."<br  />";
echo $nomes[3]."<br  />";
echo $nomes[4]."<br  />";
*/
#for($i=0;$i<=4;$i++)
#echo $nomes[$i]."<br  />";

#echo count($nomes); //mostra quantas posições tem no array

#for($i=0;$i < count($nomes);$i++)
#echo $nomes[$i]."<br  />";

$limite = 10;
$i = 0;
$array = array();
while($limite > $i) {
    $array[] = "abc";
$i++;
}
?>