<?php
    session_start();


    if(isset($_COOKIE['login'])){
        header("Location: mainpage.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>English Premier League</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/registration.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
require "blocks/header.php";
?>

<div class="container" style="max-height:100%;height: auto;margin-top: 20px;">
    <div class="row" style="">
        <div class="col-md-offset-3 col-md-6">

            <div style="background-image: url(img/bg.jpg);background-size: cover; background-repeat: no-repeat;" class="tab" role="tabpanel">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">sign in</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">sign up</a></li>
                </ul>

                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form class="form-horizontal" action="../server/vendor/signin.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Login</label>
                                <input name="login" type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <input id="checkbox" type="checkbox" class="form-check-input" name="check">
                                <label class="form-check-label" for="checkbox">Remember me</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="sign_in btn btn-default">Sign in</button>
                           </div>
                            <p class="error-msg no_active"></p>

                            <div class="form-group forgot-pass">
                                <button type="submit" class="btn btn-default">forgot password</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form class="form-horizontal" action="../server/vendor/signup.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input name="name" type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Login</label>
                                <input name="login_up" type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password_up" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="sign_up btn btn-default">Sign up</button>
                            </div>
                            <p class="error-msg no_active"></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
require "blocks/footer.php";
?>
</body>
</html>
