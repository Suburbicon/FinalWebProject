<?php
session_start();
require_once "../server/config.php";
if (!isset($_SESSION['user'])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>English Premier</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php
  require "blocks/header.php";
  ?>

  <div class="container">
    <h1 class="mt-4 mb-3">О сайте
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">О сайте</li>
    </ol>

    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img/about4.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <h2>Описание проекта</h2>
        <p>Наша редакция сотрудничает с лучшими журналистами страны и создает самые громкие материалы о российском спорте. Социальная сеть «Трибуна» объединяет более миллиона пользователей, обсуждающих спорт в своих блогах, форумах и статусах. </p>
        <p>Среди участников «Трибуны» – известные журналисты, телеведущие, спортсмены и тренеры, а также представительства спортивных клубов и нишевых спортивных изданий.  Статистическая база Sports.ru – самая подробная на русском языке, что помогает нам поддерживать широкую линейку fantasy-игр, основанных на реальных данных.</p>
      </div>
    </div>
    <h2>Подробности</h2>

    <div class="row">
        <?php
        $sql = 'SELECT * FROM Details';
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);

        for($x = 0; $x < 3; $x++){

        ?>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="img/about<?=$x+1?>.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $row['title'] ?></h4>
            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
            <p class="card-text"><?= $row['description'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#"><?= $row['link'] ?></a>
          </div>
        </div>
      </div>
        <?php
        }
        ?>
    </div>
  </div>

  <?php
  require "blocks/footer.php";
  ?>

</body>

</html>
