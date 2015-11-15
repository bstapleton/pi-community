@extends('layouts.master')

@section('global-header')
    @parent
@endsection

@section('content')
    <article>
        <h1>{{ $game->title }}</h1>

        <div class="game-introduction">
            {{ $game->introduction }}
        </div>
    </article>
@endsection

@section('global-footer')
    @parent
@endsection