{{-- /admin/articles --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    <div class="content-list">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Introduction</th>
                <th>Template</th>
                <th>Created By</th>
                <th>Edited By</th>
                <th>Publication Date</th>
                <th>Comments</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td><a href="{{ action('Admin\ArticleController@edit', [$article->id]) }}">{{ $article->title }}</a></td>
                    <td @if (!$article->introduction)class="error"@endif>
                        {{ $article->introduction or 'You missed something' }}
                    </td>
                    <td>
                        {{ $article->template->title }}
                    </td>
                    <td>
                        {{ $article->user->name }}
                    </td>
                    <td>editor here</td>
                    <td>pub date here</td>
                    <td>#</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection