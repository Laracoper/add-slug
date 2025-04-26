@extends('inc.layout')

@section('title','главная страница')

@section('content')
<h2>all posts</h2>
<a href="{{ route('posts.create') }}">create post</a>
<div class="cards d-flex flex-wrap gap-2">
@foreach ($posts as $post)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <!-- <h5 class="card-title">{{ $post->title }}</h5> -->
     <h6><a class="text-dark" href="{{ route('posts.show',[$post->slug]) }}">{{ $post->title }}</a></h6>
 
    <!-- <a href="{{ route('posts.show',[$post->slug]) }}" class="card-link">подробнее...</a> -->
  </div>
</div>
@endforeach
</div>

@endsection