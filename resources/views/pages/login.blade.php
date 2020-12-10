@extends('layout')

@section('content')

    <div class="main-content" style="margin-bottom: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="leave-comment mr0" style="margin-top: 100px;">
                        <h3 class="text-uppercase">Login</h3>
                        @if(session('status'))
                            <div class="alert alert-danger">{{session('status')}}</div>
                        @endif
                        @include('admin.errors')
                        <br>
                        <form class="form-horizontal contact-form" role="form" method="post" action="/login">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="Email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" name="password"
                                           placeholder="password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>

                        </form>
                        <a class="btn btn-default" href="/register">Registration</a>
                    </div><!--end leave comment-->
                </div>
            </div>
        </div>
    </div>

@endsection
