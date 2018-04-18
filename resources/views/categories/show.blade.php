@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>{{ $category->name }}</h1>
        </div>
        <h2><strong>Recent Blogs on {{ $category->name }}</strong></h2>
        <hr>
        @foreach ($category->blog as $blog)
            <h2><a href="{{ action('BlogController@show', [$blog->slug]) }}">{{ $blog->title }}</a></h2>
            <hr>
        @endforeach
    </div>

</main>


@endsection
