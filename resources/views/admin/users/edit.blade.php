{{-- /admin/users/edit --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    {!! Form::model($user, [
        'method' => 'PATCH',
        'route' => ['admin.user.update', $user->name]
    ]) !!}

    {{-- name Form Input --}}
    <div class="form-group">
        {!! Form::label('nickname', 'Nickname:') !!}
        {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
    </div>

    {{-- group Form Input --}}
    <div class="form-group">
        {!! Form::label('group', 'Authentication Group:') !!}
        {!! Form::select('group', $groupList, ['class' => 'form-control']) !!}
    </div>

    {{-- country Form Input --}}
    <div class="form-group">
        {!! Form::label('country', 'Authentication Group:') !!}
        {!! Form::select('country', $countryList, ['class' => 'form-control']) !!}
    </div>

    {{-- email Form Input --}}
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    {{-- twitch Form Input --}}
    <div class="form-group">
        {!! Form::label('twitch', 'Twitch:') !!}
        {!! Form::text('twitch', null, ['class' => 'form-control']) !!}
    </div>

    {{-- twitter Form Input --}}
    <div class="form-group">
        {!! Form::label('twitter', 'Twitter:') !!}
        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
    </div>

    {{-- youtube Form Input --}}
    <div class="form-group">
        {!! Form::label('youtube', 'YouTube:') !!}
        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
    </div>

    {{-- steam Form Input --}}
    <div class="form-group">
        {!! Form::label('steam', 'Steam:') !!}
        {!! Form::text('steam', null, ['class' => 'form-control']) !!}
    </div>

    {{-- xbox Form Input --}}
    <div class="form-group">
        {!! Form::label('xbox', 'XBox Live:') !!}
        {!! Form::text('xbox', null, ['class' => 'form-control']) !!}
    </div>

    {{-- psn Form Input --}}
    <div class="form-group">
        {!! Form::label('psn', 'PSN:') !!}
        {!! Form::text('psn', null, ['class' => 'form-control']) !!}
    </div>

    {{-- introduction Form Input --}}
    <div class="form-group">
        {!! Form::label('introduction', 'Introduction:') !!}
        {!! Form::textarea('introduction', null, ['class' => 'form-control']) !!}
    </div>

    {{-- 'name',
        'nickname',
        'email',
        'password',
        'twitch',
        'twitter',
        'youtube',
        'steam',
        'xbox',
        'psn',
        'introduction',
        'birthday',
        'country',
        'exp', --}}

    {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection