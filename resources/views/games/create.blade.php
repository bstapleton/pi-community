@extends('layouts.master')

@section('global-header')
    @parent
@endsection

@section('content')
    <h1>Create a New Game</h1>

    {!! Form::open(['url' => 'games']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Game Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('introduction', 'Introduction text:') !!}
            {!! Form::textarea('introduction', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('developer', 'Developer:') !!}
            {!! Form::select('developer', $developerList) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Game', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection

@section('global-footer')
    @parent
@endsection