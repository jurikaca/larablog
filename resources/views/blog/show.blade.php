@extends('layouts.app')
@section('content')

@include('partials.meta-dynamic')

<main class="container-fluid">
    <article>

        <div class="col-sm-12">
            @if ($blog->photo)
            <img class="img-responsive featured_image" src="/images/{{ $blog->photo ? $blog->photo->photo : '' }}" alt="{{ str_limit($blog->title, 50) }}"><br>
            @endif
        </div>

        <div class="container-fluid">

            <div class="jumbotron">
                <h1 class="text-center">{{ $blog->title }}</h1> @if (Auth::user() ? Auth::user()->role_id ==1 || Auth::user()->id == $blog->user_id : '') <a style="float:right;" href="{{ action('BlogController@edit', $blog->id) }}">Edit</a> @endif

            </div>
            <div class="col-sm-8 col-sm-offset-2">
                {!! $blog->body !!}
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
            </div>

            @include('partials.disqus')                    

        </article>
    </div>


</main>


@endsection
