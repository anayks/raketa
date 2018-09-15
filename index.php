<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ракета</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/rocket.logo" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script type="text/javascript" src="script/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</head>
<body>
  <header>
      <div class="logo">
         <a href="index.html"><img class="graficlogo" height="110px" src="img/logo3.png" alt="Logo"></a>
         <div class="VhodKn"><div class="VhonKn2"><b>Личный кабинет</b></div></div>
      </div>
  </header>
<div class="FBlock"><div class="FB2"><h1>Мы открылись<h1></div></div>
  <!-- Заказать -->
  <div class="Zakaz">
    <div class="Zakaz1">
      <div class="Zakaz__item">
           <h2>Заказать грузовик</h2>
      </div>
    </div>
  </div>
 <!-- Вся Инфа -->
 <div class="advanteges__container1">
   <div class="advanteges">
     <div class="adventeges__item">
        <a href="#"><img src="img/like.png"></a>
        <h2>Качество</h2>
        <p>Мы относимся с любовью к своей работе и стараемся совершенствоваться с каждым новым заказом.</p>
     </div>
     <div class="adventeges__item">
        <a href="#"><img src="img/nout.png"></a>
        <h2>Автоматизация</h2>
        <p>Мы идем в ногу со временем и стараемся постоянно добавлять что-то новое для упрощения работы.</p>
     </div>
    <div class="adventeges__item">
       <a href="#"><img src="img/kybok.png"></a>
       <h2>Достижения</h2>
       <p>Мы стараемся для вас и только для вас! Каждая выполненная цель - это достижение для нас.</p>
    </div>
   </div>
  </div>
<footer>
   <div class="social">
     <a href="https://mail.ru"><img src="img/em.png" alt=""></a>
     <a href="https://google.com"><img src="img/goo.png" alt=""></a>
     <a href="https://facebook.com"><img src="img/face.png" alt=""></a>
     <a href="https://vk.com"><img src="img/vk.png" alt=""></a>
   </div>
 </footer>
</body>
</html>
<?php
  $sql = mysql_connect('triniti.ru-hoster.com', 'lelelMu9', 'B6k1i0Sc2l');
  mysql_select_db('lelelMu9');
  $ip = $_SERVER['REMOTE_ADDR'];
  $query = "SELECT COUNT(*) from `guest` where `ip` = '".$ip." and `date` = '".date('d.m.y')."'";
  $answer = mysql_query($query);
  $row = mysql_fetch_row($answer);
  if($row == 0)
  {
    $query = "INSERT INTO `guest` (`ip`, `date`) values ('".$ip."', '".date('d.m.y')."')";
    mysql_query($query);
  }
?>