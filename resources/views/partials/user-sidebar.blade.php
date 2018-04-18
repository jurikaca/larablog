@if ($user->about)
    <div>
        <h2>About</h2>
        <hr>
        <p>{{ $user->about }}</p>
    </div>
@endif

<div>
    <h2>URL</h2>
    <hr>
    <a href="{{ $user->username }}">newitbooks.com/{{ $user->username }}</a>
</div>

@if ($user->website)
    <div>
        <h2>Website</h2>
        <hr>
        <a href="{{ $user->website }}">{{ $user->website }}</a>
    </div>
@endif

@if ($user->facebook || $user->twitter || $user->github)
    <div>
        <h2>Get Social</h2>
        <hr>
        <ol class="list-unstyled">
            @if ($user->facebook)
                <li><a href="{{ $user->facebook }}">{{ $user->facebook }}</a></li>
            @endif
            @if ($user->twitter)
                <li><a href="{{ $user->twitter }}">{{ $user->twitter }}</a></li>
            @endif
            @if ($user->github)
                <li><a href="{{ $user->github }}">{{ $user->github }}</a></li>
            @endif
        </ol>
    </div>
@endif