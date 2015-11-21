{{-- /admin/users --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="content-list">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>User</th>
                <th>Authentication Group</th>
                <th>Registered</th>
                <th>Email Address</th>
                <th>Tools</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href="{{ action('Admin\UserController@show', [$user->name]) }}">{{ $user->name }}</a>
                    </td>
                    <td>
                        @if ($user->group)
                            {{ $user->group->name }}
                        @endif
                    </td>
                    <td>
                        {{ date('F d, Y', strtotime($user->created_at)) }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        <a href="{{ action('Admin\UserController@edit', [$user->name]) }}" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ action('Admin\UserController@destroy', [$user->name]) }}" title="Disable"><i class="fa fa-ban"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection