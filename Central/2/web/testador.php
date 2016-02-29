<?php
/*
  $group_card = '4788555441254455';
  $group_mes = '02';
  $group_ano = '16';
  $group_cvv = '123';
  echo "ACTION=DO_CONTINUE&PAYMENTPRODUCTID=3&REF=000000657032237602790000100001&CREDITCARDNUMBER=$group_card&CREDITCARDNUMBER_OBFUSCATED=&CREDITCARDNUMBER_CLEAR=&EXPIRYDATE_MM=$group_mes&EXPIRYDATE_YY=$group_ano&EXPIRYDATE=".$group_mes.$group_ano."&CVV=$group_cvv&CVV_OBFUSCATED=&CVV_CLEAR=";
  die();
 */
?>

<div class="grids">
    <div class="panel panel-widget forms-panel">
        <div class="progressbar-heading general-heading">
            <h4>General Form :</h4>
        </div>
        <div class="forms">
            <h3 class="title1"></h3>
            <div class="form-three widget-shadow">
                <form class="form-horizontal"  name="frm-CardCheck" method="post">
                    <div class="form-group">
                        <label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
                        <div class="col-sm-8">
                            <textarea name="CARDLIS" id="txtarea1" cols="50" rows="5" class="form-control" placeholder="cc|mes|ano|cvv"></textarea><br>
                            <input type="submit" class="btn btn-success" value="TESTAR">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
        print "$setParamUX - $setParamFunction";
    }
    print "<br> <div style='width: 40%;' class='alert alert-warning'> Testador finalizado!!</div>";
}
?>
            