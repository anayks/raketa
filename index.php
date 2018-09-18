<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
         <a href="index.php"><img class="graficlogo" height="110px" src="img/Logo4.png" alt="Logo"></a>
         <div class="Art228"><b>Заказать</b></div>
      </div>
  </header>
  <div class="Rcolor"></div>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carousel1.png" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel2.png" alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel3.png" alt="Третий слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
  <div class="telo"><!--
  <div class="vhod">

 <div class="Zak"><h1>Заказать<h1></div>

      <div class="dws-input">
         <input type="text" id="login" name="username" placeholder="Введите ФИО" class="log-input">
      </div>

      <div class="dws-input">
         <input type="password" id="password" name="password" placeholder="Введите номер телефона" class="log-input">
      </div>

      <div class="dws-input">
         <input type="text" id="login" name="username" placeholder="Место доставки" class="log-input">
      </div>

         <div class="mtb20"><button class="down">Заказать звонок</button></div>
         <br />
    </div>
  </div>

   <div class="IAus">
      <div class="IAus2">lorem74lorem7ellorelorem>lorem74lorem74lorem74lorem74labellorelorem>lorem
        74lorem74lorem74lorem74labellorelorem>lorem74lorem74lorem74lorem74labell
        orelorem>lorem74lorem74lorem74lorem74labellorelorem>lorem74lorem74lorem74l
        orem74labellorelorem>lorem74lorem74lorem74lorem74labellorelorem>lorem74lor
        em74lorem74lorem74labellorelorem>lorem74lorem74lorem74lorem74labellorelore
        m>lorem74lorem74lorem74lorem74labellorelorem>4lorem74labellorelorem</div>
   </div>
   -->
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
  $query = "SELECT COUNT(*) from `guest` where `ip` = '".$ip."' and `date` = '".date('d.m.y')."'";
  $answer = mysql_query($query);
  $row = mysql_fetch_row($answer);
  if($row[0] == 0)
  {
    $query = "INSERT INTO `guest` (`ip`, `date`) values ('".$ip."', '".date('d.m.y')."')";
    mysql_query($query);
  }
?>
