<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {header('Location: login.php'); exit;}
else {
	$auth = 0;
	$UserLogin 	= $_POST['userLogin'];
	$UserPass 	= $_POST['userPass'];
	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
	mysql_select_db('lelelMu9');
	mysql_set_charset( 'utf8' );
	$query = "SELECT * from `accounts` where `Login` = '".$UserLogin."'";
	$answer = mysql_query($query);
	$row = mysql_fetch_row($answer);
	if (!mysql_num_rows($answer)) {
		$auth = 0;
		$a=array(
		'auth'=>$auth,
		);
	}
	else 
	{
		if($row[2] == $UserPass) { 
			$auth = 2; 
			$ID = rand(1000, 99999999);
			$query = "UPDATE `accounts` SET `IDen` = ".$ID;
			mysql_query($query);
			$a=array(
				'auth'=>$auth,
				'ids'=>$ID,
			);
		}
		else
		{
			$auth = 1;
			$a=array(
			'auth'=>$auth,
			);
		}
	}
	echo json_encode($a);
}
?>