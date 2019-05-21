@extends('layouts.app')
@section('content')

        <div class="jumbotron text-center">
                <h1>{{$title}}</h1>
                <p>This is a simple blog application supports image uploading building in Laravel</p>
                <p><a class="btn btn-primary btn-lg" href="/login" role="botton">Login</a>
                        <a class="btn btn-success btn-lg" href="/register" role="botton">Register</a>
                </p>
        </div>
@endsection