@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Hello, {{ $user->name }}</h1>
            <p>Please make changes to make your profile awesome</p>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->username], 'files' => true]) !!}
            @include('partials.error-message')
                <div class="form-group">
                    {!! Form::label("name", "Name") !!}
                    {!! Form::text("name", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("about", "About") !!}
                    {!! Form::textarea("about", null, ['class' => 'form-control', 'placeholder' => 'Write about yourself']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("website", "Website") !!}
                    {!! Form::url("website", null, ['class' => 'form-control', 'placeholder' => 'Paste your website url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("facebook", "Facebook") !!}
                    {!! Form::url("facebook", null, ['class' => 'form-control', 'placeholder' => 'Paste your facebook url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("twitter", "Twitter") !!}
                    {!! Form::url("twitter", null, ['class' => 'form-control', 'placeholder' => 'Paste your twitter url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("github", "Github") !!}
                    {!! Form::url("github", null, ['class' => 'form-control', 'placeholder' => 'Paste your github url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("photo_id", "Profile Picture") !!}
                    {!! Form::file("photo_id") !!}
                </div>
                <div class="form-group">
                    {!! Form::label("get_email", "Email alert on new Blog post") !!}
                    {!! Form::select("get_email", ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>


</main>

@endsection
