<?php
    session_start();
?>
    <nav style="padding-bottom: " class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="mainpage.php">English Football</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <p style="margin-bottom: 0;color: white; font-size: 20px;"><?php  if (isset($_SESSION['user'])) echo $_SESSION['user']['login'] ?></p>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="mainpage.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galleryPage.php">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">O сайте</a>
                    </li>
                    <li class="nav-item">
                      <?php if (isset($_SESSION['user'])) echo '<a class="nav-link" href="../server/vendor/logout.php">Выйти</a>';
                      else echo '<a class="nav-link" href="../server/vendor/logout.php">Войти</a>'
                      ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

