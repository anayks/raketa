<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {header('Location: login.php'); exit;}
else {
	$UserLogin 	= $_POST['userLogin'];
	$UserPass 	= $_POST['userPass'];
	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
	mysql_select_db('lelelMu9');
	mysql_set_charset( 'utf8' );
	$query = "SELECT count(*) from `accounts` where `Login` = '".$UserLogin."' and `Password` = '".$UserPass."'";
	$answer = mysql_query($query);
	$row = mysql_fetch_row($answer);

	if($row[0] == 0) {$auth = 0;
		$a=array(
		           'auth'=>$auth,
		);}
	else { 
		$auth = 1; 
		$ID = rand(0, 99999999);
		$a=array(
		           'auth'=>$auth,
		           'ids'=>$ID,
		);
	}

	echo json_encode($a);
}
?>