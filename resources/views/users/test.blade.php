@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <h1>{{ $user->count() }} testing how many and latest users</h1>
        <div class="jumbotsron col-sm-6 col-sm-offset-3">
            @foreach ($users as $user)
                {{-- @if ($user->created_at > \Carbon\Carbon::yesterday()) --}}
                    <h2>Latest user to join kaloraat</h2>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->created_at->diffForHumans() }}</p>
                {{-- @endif --}}
            @endforeach
        </div>
    </div>


</main>


@endsection
