
    @if (Auth::user()->is_favoreting($micropost->id))
        {{-- アンフェーバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェーバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-warning"]) !!}
        {!! Form::close() !!}
    @endif
