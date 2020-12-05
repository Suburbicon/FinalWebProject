<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="css/game.css">
</head>
<body>
<header>
    <div class="container">
        <div class="vector-bg-1">
            <img src="img/game/vector-1.png" alt="">
        </div>
        <div class="vector-bg-2">
            <img src="img/game/vector-2.png" alt="">
        </div>

    </div>
</header>

<section>
    <div class="container start">
        <div class="title-wrapper">
            <h1 class="start__title">
                English Premier League<br>
            </h1>
        </div>
    </div>
</section>

<div class="wrap">
    <div class="game"></div>
    <div class="modal-overlay">
        <div class="modal">
            <button class="modal_close restart">&times</button>
            <div class="finish-wrapper">
                <h1 class="finish__title">Воу, круто!</h1>
                <img src="img/game/flame.png" alt="">
            </div>
        </div>
    </div>
</div><!-- End Wrap -->

<!-- Final Modal -->
<div class="popup-wrapper">
    <div class="popup">
        <button class="popup__close trigger">&times</button>
        <div class="popup__content">
            <div class="popup__image">
                <img src="img/game/done.png" alt="done">
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/game.js"></script>
</body>
</html>
