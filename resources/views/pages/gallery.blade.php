@extends('layout')

@section('content')

    <div class="container">

        <h1 class="mt-4 mb-3">Короткие новости</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Главная</a>
            </li>
            <li class="breadcrumb-item active">Короткие новости</li>
        </ol>
        @foreach($galleries as $gallery)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded" src="img/gal{{$gallery->id}}.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="card-title">{{$gallery->title}}</h2>
                        <p class="card-text">{{$gallery->description}}</p>
                        <a href="#" class="btn btn-primary">Подробно &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                {{$gallery->date_published}}

            </div>
        </div>
        @endforeach
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; назад</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">вперёд &rarr;</a>
            </li>
        </ul>
    </div>

@endsection
