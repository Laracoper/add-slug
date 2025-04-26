@extends('inc.layout')

@section('title','главная страница')

@section('content')
<div class="container">
<h2>one posts</h2>


<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
 <p class="card-text">{{ $post->text }}</p>
    <a href="" class="card-link">delete</a>
  </div>
</div>
</div>


@endsection