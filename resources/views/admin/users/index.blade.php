{{-- /admin/users --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    users view

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
                        <a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a>
                    </td>
                    <td>
                        @if ($user->group)
                            {{ $user->group->name }}
                        @endif
                    </td>
                    <td>
                        {{ $user->created_at }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>icons here here</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection