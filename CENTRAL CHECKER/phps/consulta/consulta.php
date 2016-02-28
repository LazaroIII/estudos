<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<?php
$cpf = $_POST['cpf'];
$ch = curl_init();
$cookies = rand(1000000,1000000);
curl_setopt($ch, CURLOPT_URL, "http://www.soawebservices.com.br/restservices/producao/cdc/pessoafisicaestendida.ashx");
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies.".txt");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("application/json"));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"Credenciais": {"Email": "dudaipo@hotmail.com","Senha": "mqZZr8TYW"},"Documento": "'.$email.'"}');
print $json = curl_exec($ch);


?>