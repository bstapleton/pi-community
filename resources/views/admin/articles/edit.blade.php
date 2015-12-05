{{-- /admin/articles/create --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    {!! Form::model($article, [
        'method' => 'PATCH',
        'route' => ['admin.article.update', $article->id]
    ]) !!}

    {{-- title Form Input --}}
    <div class="form-group">
        {!! Form::label('name', 'Title:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {{-- introduction Form Input --}}
    <div class="form-group">
        {!! Form::label('introduction', 'Introduction:') !!}
        {!! Form::text('introduction', null, ['class' => 'form-control']) !!}
    </div>

    {{-- content Form Input --}}
    <div class="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection