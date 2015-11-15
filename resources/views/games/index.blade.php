@extends('layouts.master')

@section('global-header')
    @parent
@endsection

@section('content')
    <h1>Games</h1>

    @foreach ($games as $game)
        <article>
            <h2>
                <a href="{{ action('GamesController@show', [$game->id]) }}">{{ $game->title }}</a>
            </h2>

            <div class="game-introduction">
                {{ $game->introduction }}
            </div>
        </article>
    @endforeach
@endsection

@section('global-footer')
    @parent
@endsection