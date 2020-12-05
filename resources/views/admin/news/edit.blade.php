@extends('admin.layout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить тег
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем тег</h3>
                </div>
                @include('admin.errors')
                <div class="box-body">
                    {{Form::open(['route'=>['news.update',$post->id],'method'=>'put'])}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$post->title}}">
                            <label>Description</label>
                            <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{$post->description}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                {{Form::close()}}
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
