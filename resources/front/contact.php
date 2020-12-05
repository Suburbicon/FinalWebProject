<?php
session_start();
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

    <h1 class="mt-4 mb-3">Страница
      <small>контактов</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">Контакты</li>
    </ol>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <h3>Обратная связь</h3>
        <p>
          Казахстан
          <br>Алма-ата
          <br>
        </p>
        <p>
          <abbr title="Phone">Phone</abbr>:+7 777-777-77-77
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:name@example.com">EnglishPremier@example.com
          </a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Пишите нам</h3>
<!--          action="../server/Models/addContactMsgToDatabase.php"-->
        <form name="sentMessage" id="contactForm" method="post" enctype="multipart/form-data">
          <div class="control-group form-group">
              <span id="invalid-name"></span>
            <div class="controls">
              <label>Имя:</label>
              <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
              <span id="invalid-tel"></span>
            <div class="controls">
              <label>Телефон:</label>
              <input type="tel" class="form-control" name="tel" id="phone" placeholder="+7-777-777-77-77" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
              <span id="invalid-email"></span>
            <div class="controls">
              <label>E-mail:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="mail@mail.ru" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
              <span id="invalid-text"></span>
            <div class="controls">
              <label>Текст:</label>
              <textarea rows="10" cols="100" class="form-control" name="text" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Отправить</button>
        </form>
      </div>
    </div>
  </div>

  <?php
  require "blocks/footer.php";
  ?>

</body>
</html>
