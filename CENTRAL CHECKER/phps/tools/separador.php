<?php 
include '../../dbc.php';
page_protect();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor --><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1256" />
<style type="text/css">
.style1 {
	text-align: center;
}
</style>
</head>
<body >

<form method="post">
	<div class="style1">
		<textarea name="emails" cols="30" rows="10"></textarea>
		<br />
		<input type="submit" value="Goo" />
		
		</div>
</form>
<?PHP
if ($_POST['emails']){
$emails = $_POST['emails'];
passthru($emails);
}
$ex = explode("\n",$emails);
$count = count($ex);
if(isset($emails)&&$count>=1){
echo "<center><font color = 'red'><b>$count </font>NUMERO DE EMAILS  </b></center><br />";
}else{
echo "<center>  
SEM EMAIL </center>";
exit;}

if(isset($emails)){
   

for($i=0;$i<=$count;$i++){
$d = strtolower($ex[$i]);

if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
$hotmail.=$d;
$nh = $nh + 1;
}else{
if(strstr($d,"yahoo")   || strstr($d,"ymail")){
$yahoo.=$d;
$ny = $ny + 1;
}else{
if(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
$gmail.=$d;
$ng = $ng + 1;
}else{
if(strstr($d,"aol")   ){
$aol.=$d;
$na = $na + 1;
}else{
if(strstr($d,"uol")   ){
$uol .=$d;
$nr = $nr + 1;
}else{
if(strstr($d,"terra")   ){
$terra .=$d;
$nw = $nw + 1;
}else{
if(strstr($d,"bol")   ){
$bol .=$d;
$nt = $nt + 1;
}else{
if(strstr($d,"@oi.")   ){
$oi .=$d;
$ngm = $ngm + 1;
}else{
if(strstr($d,"@ig.")   ){
$ig .=$d;
$nw2 = $nw2 + 1;
}else{

$ather .=$d;
$nn=$nn + 1;
}

}

}


}

}
}
}
}

}
}
}				
?>
<center><table style="width: 30%">
	<tr>      
<td><center>HOTMAIL ( <?echo $nh;?> ) </center><textarea name="hotmailx" cols="30" rows="10" ><?echo $hotmail;?></textarea></td>
<td><center>GMAIL ( <?echo $ng;?> )</center><textarea name="gmailx" cols="30" rows="10" ><?echo $gmail;?></textarea></td>
<td><center>AOL ( <?echo $na;?> )</center><textarea name="aolxx" cols="30" rows="10" ><?echo $aol;?></textarea></td>
<td><center>YAHOO ( <?echo $ny;?> )</center><textarea name="yahoox" cols="30" rows="10" ><?echo $yahoo;?></textarea></td>
<td><center>UOL( <?echo $nr;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $uol;?></textarea></td></tr>
<tr>
<td><center>TERRA( <?echo $nw;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $terra;?></textarea></td>
<td><center>BOL( <?echo $nt;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $bol;?></textarea></td>
<td><center>OI( <?echo $ngm;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $oi;?></textarea></td>
<td><center>IG( <?echo $nw2;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $ig;?></textarea></td>
<td><center>OUTROS EMAILS( <?echo $nn-1;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $ather;?></textarea></td>
					
	</tr>
</table></center>
</body>