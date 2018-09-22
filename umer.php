<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {header('Location: login.php'); exit;}
else {
	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
	mysql_select_db('lelelMu9');
	mysql_set_charset('utf8');
	$Name = $_POST['Name'];
	$Number = $_POST['Number'];
	$query = "SELECT COUNT(*) from `phone`";
	$ak = mysql_query($query);
	$row = mysql_fetch_row($ak);
	$query = "INSERT into `phone` (`ID`, `Name`, `Number`) values ('".$row[0]."', '".$Name."', '".$Number."')";
	mysql_query($query);
	$a=array(
		'auth'=>'1',
		);
	echo json_encode($a);
	mysql_close($sql);
}
?>