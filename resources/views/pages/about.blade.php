@extends('layout')

@section('content')

    <div class="container">
        <h1 class="mt-4 mb-3">О сайте
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Главная</a>
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
            @foreach($details as $detail)
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="img/about{{$detail->id}}.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$detail->title}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text"><{{$detail->description}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">{{$detail->link}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
