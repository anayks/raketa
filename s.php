<?
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {header('Location: login.php'); exit;}
else {
	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
	mysql_select_db('lelelMu9');
	mysql_set_charset('utf8');
	$ID = $_POST['id'];
	$query = "UPDATE `phone` SET `State` = 1 WHERE `ID` ='".$ID."'";
	mysql_query($query);
	$auth = 1;
	$a=array(
		'auth'=>$auth,
		);
	echo json_encode($a);
	mysql_close($sql);
}
?>