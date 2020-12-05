@extends('layout')

@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(/img/slide1.jpg);">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Liverpool - Manchester City</h3>
                        <p></p>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(img/slide2.jpg)">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Life football</h3>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(img/slide3.jpg)">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>League of Champions</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <div class="container">

        <h1 style="margin: 25px 0 ;">Currently News </h1>
        <div class="row">
            @foreach($news as $post)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/main{{$post->id}}.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$post->title}}</a>
                        </h4>
                        <p class="card-text">{{$post->description}}</p>
                        <p class="card-text">{{$post->date_published}}</p>
                        <div class="like" id="like"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>The Member Clubs of the Premier League</h2>
                <p>The Premier League is a private company wholly owned by its 20 Member Clubs who make up the League at any one time.</p>
                <ul>
                    <li>Each individual club is independent, working within the rules of football, as defined by the Premier League, The FA, UEFA and FIFA, as well as being subject to English and European law.</li>
                    <li>Each of the 20 clubs are a Shareholder in the Premier League.</li>
                    <li>Consultation is at the heart of the Premier League and Shareholder meetings are the ultimate decision-making forum for Premier League policy and are held at regular intervals during the course of the season.</li>
                </ul>
                <p>The Premier League AGM takes place at the close of each season, at which time the relegated clubs transfer their shares to the clubs promoted into the Premier League from the Football League Championship.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="img/footer.jpg" alt="">
            </div>
        </div>

        <hr>

        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">

                <a class="btn btn-lg btn-secondary btn-block" href="about.php">Подробнее...</a>
            </div>
        </div>

    </div>

@endsection
