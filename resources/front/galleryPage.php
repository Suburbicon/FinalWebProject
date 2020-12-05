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

    <h1 class="mt-4 mb-3">Короткие новости</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">Короткие новости</li>
    </ol>
      <?php
      $sql = 'SELECT * FROM Gallery';
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_array($result);

      for ($x = 0;$x < 4;$x++){

      ?>

    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="img/gal<?=$x+1?>.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title"><?= $row['title'] ?></h2>
            <p class="card-text"><?= $row['description'] ?></p>
            <a href="#" class="btn btn-primary">Подробно &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <?= $row['date_published'] ?>
        <a href="#">Раздел: </a>
      </div>
    </div>
    <?php
      }
    ?>

    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; назад</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">вперёд &rarr;</a>
      </li>
    </ul>
  </div>
  </div>

  <?php
  require "blocks/footer.php";
  ?>

</body>
</html>
