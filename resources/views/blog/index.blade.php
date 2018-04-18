@extends('layouts.app')
@section('content')

@include('partials.meta-static')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>New IT Books</h1>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
        <div class="search">  
        {!! Form::open(['action' => 'BlogController@index', 'method' => 'GET', 'role' => 'search']) !!}
            <div class="input-group">
                {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search Blogs', 'id' => 'term']) !!}
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="">Search</span>
                    </button>
                </span>
            </div>
        {!! Form::close() !!}
        </div>
            @foreach ($blogs as $blog)
                <article>
                @if ($blog->photo)
                    <div class="img-responsive">
                    <br>
                        <img height="200" src="/images/{{ $blog->photo ? $blog->photo->photo : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                    </div>
                @endif
                    <h2><a href="{{ action('BlogController@show', [$blog->slug]) }}">{{ $blog->title }}</a></h2>
                    {!! str_limit( $blog->body, 350) !!}
                    <hr>
                    <p>

                    @if ($blog->user)
                         <i class="fa fa-btn fa-user"></i> Blog by <a href="{{ route('users.show', $blog->user->username) }}">{{ $blog->user->name }}</a> <i class="fa fa-btn fa-clock-o"></i>
                     @endif 

                    Posted <strong>{{ $blog->created_at->diffForHumans() }}</strong> 

                    @if ($blog->category)
                         @foreach ($blog->category as $category) <i class="fa fa-btn fa-cubes"></i> <a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a> @endforeach
                     @endif 

                    </p>
                </article>
            @endforeach
            <div class="text-center">
                {!! $blogs->links() !!}
            </div>
        </div>
    </div>

</main>


@endsection
