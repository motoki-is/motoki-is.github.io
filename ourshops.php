<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <title>Ourshops</title>
  <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
 include "./add/header.php" 
 ?>

<p class="white_ourshops"></p>

<section id="ourshops">
   <h1 class="title_ourshops">Ourshops</h1>
   <div class="ourshops">
    <map name="ourshop">
      <area alt="stand1-1" href="https://www.instagram.com/stand_okayama/" coords="154,106,220,122" shape="rect">
      <area alt="kenbi" href="https://cifaka.jp/shop/kenbi/" coords="134,236,220,252" shape="rect">
      <area alt="stand6-10" href="https://cifaka.jp/shop/stand/" coords="173,293,243,310" shape="rect">
      <area alt="cccscd" href="https://cifaka.jp/shop/cccscd/" coords="132,312,189,326" shape="rect">
      <area alt="csonline" href="https://csonline.cifaka.jp/" coords="132,325,194,340" shape="rect">
     </map>
    <p>
      <img src="images/map_cifaka.png" usemap="#ourshop" alt="イメージマップourshop">
    </p>
</div>

</section>

<p class="white_ourshop_under"></p>

<?php 
include "./add/footer.php"
 ?>

</body>

</lang=>