@extends('layouts.app')

@section('content')
<br>
    <h1>Posts</h1>
    <br>
    @if (count($posts) > 0)
        @foreach($posts as $post)
            <div class="card bg-light p-4">
                <div class ="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src ="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <a>Written on {{$post->created_at}} by {{$post->user->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection