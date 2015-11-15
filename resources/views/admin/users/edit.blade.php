{{-- /admin/users/edit --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    users view

    {!! Form::model($user, [
        'method' => 'PATCH',
        'route' => ['admin.users.update', $user->id]
    ]) !!}

    {{-- name Form Input --}}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('group', 'Authentication Group:') !!}
        {!! Form::select('group', $groupList, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection