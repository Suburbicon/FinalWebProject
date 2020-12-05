<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    @yield('content')

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright Khassenov, Ryskaliev</p>
        <p class="m-0 text-center text-white">Copyright &copy; Website 2020</p>
    </div>
    <!-- /.container -->
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap4.3.1.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
