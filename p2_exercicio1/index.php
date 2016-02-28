<?php
$i = array (0=>0 , 1=>1);
//echo "Impar ".$i[0]."<br>";
//echo "Par ".$i[1]."<br>";
echo "Pares:<br>";
while ($i[0] <= 100){
    echo $i[0]."<br>";
    $i[0]+=2;
}
echo "Impares: <br>";
while ($i[1] <= 100){
    echo "<center>".$i[1]."</center><br>";
    $i[1]+=2;
}


?>