@extends('inc.layout')

@section('title','главная страница')

@section('content')
<div class="container">
    
    <h2>create posts</h2>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="img" class="form-label">image</label>
            <input type="file" class="form-control mb-3" name="img" id="img" placeholder="img">
        </div>
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