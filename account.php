<?php $sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
mysql_select_db('lelelMu9');
mysql_set_charset('utf8');
$iden = $_COOKIE['ID'];
if(empty($iden))
{
$iden = "-1";
$query = "SELECT COUNT(*) FROM `accounts` where `IDen` = ".$iden."";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
if($row[0] == 0) 
{ 
header('Location: https://tc-raketa.ru');
die ("Not authorized");
}
mysql_close($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Личный кабинет</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="acc.css">
  <link rel="shortcut icon" href="img/rocket.ico" type="image/x-icon">
  <script type="text/javascript" src="script/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="script/jqakk.js"></script>
  <script type="text/javascript" src="script/ajaja.js"></script>
</head>
<body>
  <div class="Cont1">
  <header>
      <div class="logo">
         <a href="index.php"><img class="graficlogo" height="110px" src="img/Logo4.png" alt="Logo"></a>
      </div>
  </header>
  <div class="Rcolor2">
    <img class="Lima" src="img/atras.png">
    <img class="Rima" src="img/atras2.png">
  </div>
      <table id="TableQ" cellspacing="0" cellpadding="2" border="1">
    <tr>
        <td class="TableB">ID</td>
        <td class="TableB">ФИО</td>
        <td class="TableB">Место отправки</td>
        <td class="TableB">Место доставки</td>
        <td class="TableB">Вес груза</td>
        <td class="TableB">Длина и ширина</td>
        <td class="TableB">Телефон</td>
        <td class="TableB">Подтверждение</td>
      </tr>
      <?php
      	$sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
    		mysql_select_db('lelelMu9');
    		mysql_set_charset('utf8');
    		$query = "SELECT * from `answer` ORDER BY ID DESC LIMIT 0, 9 ";
    		$da = mysql_query($query);
    		$r = 0;
    		while ($row = mysql_fetch_assoc($da)) {
    			echo "<tr>";
  		    echo "<td class=\"TableB\" id=\"F".$r."\">".$row["ID"]."</td>";
  		    echo "<td class=\"TableB\">".$row["Name"]."</td>";
  		    echo "<td class=\"TableB\">".$row["OA"]."</td>";
  		    echo "<td class=\"TableB\">".$row["DA"]."</td>";
  		    echo "<td class=\"TableB\">".$row["Weight"]."</td>";
  		    echo "<td class=\"TableB\">".$row["DS"]."</td>";
  		    echo "<td class=\"TableB\">".$row["Number"]."</td>";
  		    $Action = $row["Action"];
  		    if($Action == 0) {
  		    	echo "<td class=\"TableH\" id=\"QQ".$r."\"><div id=\"QQ".$r."R\">Подтвердить</div><div id=\"QQ".$r."RR\" style=\"display:none;\">Подтверждено</div></td>";
  		    }
  		    		  if($Action == 1) {
  		    	echo "<td class=\"TableR\" id=\"QQ".$r."\">Подтверждено</td>";
  		    }
  		    $r++;
  		    echo "</tr>";
  		  }
      ?>

    </table>
    <table id="TableJ" cellspacing="0" cellpadding="0" border="1">
      <tr>
        <td class="Tablex">ID</td>
        <td class="Tablex">ФИО</td>
        <td class="Tablex">Телефон</td>
        <td class="Tablex">Подтверждение</td>
      </tr>
        <?
          $query = "SELECT * from `phone` ORDER BY ID DESC LIMIT 0, 9 ";
          $da = mysql_query($query);
          $r = 0;
          while ($row = mysql_fetch_assoc($da)) {
            echo "<tr>";
            echo "<td class=\"TableB\" id=\"Fz".$r."\">".$row["ID"]."</td>";
            echo "<td class=\"TableB\">".$row["Name"]."</td>";
            echo "<td class=\"TableB\">".$row["Number"]."</td>";
            if($row["State"] == 0)
            {
              echo "<td class=\"TableM\" id=\"MM".$r."\"><div id=\"MM".$r."R\">Подтвердить</div><div id=\"MM".$r."RR\" style=\"display:none;\">Подтверждено</div></td>";
            }
            else {
              echo "<td class=\"TableN\" id=\"MM".$r."\"><div>Подтверждено</</td>";
            }
            $r++;
            echo "</tr>";
          }
        ?>
    </table>
</body>
</html>
