<?php
/*
  $group_card = '4788555441254455';
  $group_mes = '02';
  $group_ano = '2016';
  $group_cvv = '123';
  echo "ACTION=DO_CONTINUE&PAYMENTPRODUCTID=3&REF=000000657032237602790000100001&CREDITCARDNUMBER=$group_card&CREDITCARDNUMBER_OBFUSCATED=&CREDITCARDNUMBER_CLEAR=&EXPIRYDATE_MM=$group_mes&EXPIRYDATE_YY=$group_ano&EXPIRYDATE=".$group_mes.$group_ano."&CVV=$group_cvv&CVV_OBFUSCATED=&CVV_CLEAR=";
  die();
 */
?>

    <form name="frm-CardCheck" method="post">
            <textarea name="CARDLIS" class="input" cols="90" class="form-control" rows="20" placeholder="cc|mes|ano|cvv"></textarea>
            <center><BR> <input type="submit" class="btn btn-success" value="TESTAR" style="width: 26%;"> </center>
        </form> 
        <?php
        ini_set('smtp_port', '465');

        require_once './functions/checker_functions.php';

        error_reporting(0);
        set_time_limit(0);

        if (isset($_POST['CARDLIS'])) {
            $SetParamList = trim($_POST['CARDLIS']);
            flush();
            ob_flush();
            $SetParamList = split("\n", $SetParamList);
            $SetParamCount = count($SetParamList);
            flush();
            ob_flush();
            print "<span class='label label-info'>Total carregada :  <strong> {$SetParamCount} <strong></span> <br> <br>";
            flush();
            ob_flush();
            for ($setParamUX = 0; $setParamUX < $SetParamCount; $setParamUX++) {
                $SetParamList = str_replace(" ", "", $SetParamList);
                $SetParamList = str_replace("\r", "", $SetParamList);
                $SetParamList = str_replace("\n", "", $SetParamList);
                list($card, $mes, $ano, $cvv) = split("[:|;/]", $SetParamList[$setParamUX]);
                flush();
                ob_flush();
                if (file_exists("CardCheck_logs.txt")) {
                    unlink("CardCheck_logs.txt");
                }

                $setParamFunction = CardCheck($card, $mes, $ano, $cvv);
                print $setParamFunction;
            }
            print "<br> <div style='width: 40%;' class='alert alert-warning'> Testador finalizado!!</div>";
        }

        ?>
            