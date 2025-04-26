@extends('inc.layout')

@section('title','главная страница')

@section('content')
<div class="container">
    
    <h2>create posts</h2>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control mb-3" name="title" id="title" placeholder="title">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">text</label>
            <textarea class="form-control mb-3" name="text" id="text"></textarea>
        </div>
        <button type="submit" class="btn btn-info">send</button>
    </form>

</div>
@endsection