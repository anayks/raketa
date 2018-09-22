<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {header('Location: login.php'); exit;}
else {
	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
	mysql_select_db('lelelMu9');
	mysql_set_charset('utf8');
	$Name = $_POST['Name'];
	$Number = $_POST['Number'];
	$OA = $_POST['OA'];
	$DA = $_POST['DA'];
	$DXS = $_POST['DXS'];
	$Weight = $_POST['Weight'];
	$query = "SELECT COUNT(*) from `answer`";
	$ak = mysql_query($query);
	$row = mysql_fetch_row($ak);
	$query = "INSERT into `answer` (`ID`, `Name`, `DS`, `OA`, `DA`, `Number`, `Weight`, `Action`) values ('".$row[0]."', '".$Name."', '".$DXS."', '".$OA."', '".$DA."', '".$Number."', '".$Weight."', '0')";
	mysql_query($query);
	$a=array(
		'auth'=>'1',
		);
	echo json_encode($a);
	mysql_close($sql);
}
?>