{{-- /admin/users/edit --}}

@extends('layouts.admin.master')

@section('admin-sidebar')
    @parent
@endsection

@section('content')
    <header class="content-header">
        <h1 class="content-header-title">
            @for($i = 0; $i <= count(Request::segments()); $i++)
                {{-- We don't care about the admin root --}}
                @if(1 < $i)
                    {{-- But we do care about the sub-section route, so gimme an icon --}}
                    @if (2 == $i)
                        <i class="fa fa-{{ adminIcon(Request::segment($i)) }}"></i>
                    @endif
                
                    {{Request::segment($i)}}

                    {{-- We also care about delimiting the breadcrumbs, so icon here too, please --}}
                    @if($i < count(Request::segments()) & $i > 0)
                        {!!'<i class="fa fa-angle-right"></i>'!!}
                    @endif
                @endif
            @endfor
        </h1>
    </header>

    <p>{{ $user->introduction }}</p>

    <div class="widget">
        <div class="widget-row">
            <div class="widget-left">
                Name
            </div>
            <div class="widget-right">
                {{ $user->name }} ({{ $user->nickname or 'N/A' }})
            </div>
        </div>

        <div class="widget-row">
            <div class="widget-left">
                Email
            </div>
            <div class="widget-right">
                {{ $user->email }}
            </div>
        </div>

        @if ($user->country)
            <div class="widget-row">
                <div class="widget-left">
                    Country
                </div>
                <div class="widget-right">
                    <img src="images/flags/{{ $country->flag }}" alt="{{ $user->country }} flag" /> {{ $user->country }}
                </div>
            </div>
        @endif

        @if ($user->birthday)
            <div class="widget-row">
                <div class="widget-left">
                    Birthday
                </div>
                <div class="widget-right">
                    {{ $user->birthday }}
                </div>
            </div>
        @endif

        @if ($user->twitch)
            <div class="widget-row">
                <div class="widget-left">
                    Twitch
                </div>
                <div class="widget-right">
                    {{ $user->twitch }}
                </div>
            </div>
        @endif

        @if ($user->twitter)
            <div class="widget-row">
                <div class="widget-left">
                    Twitter
                </div>
                <div class="widget-right">
                    {{ $user->twitter }}
                </div>
            </div>
        @endif

        @if ($user->youtube)
            <div class="widget-row">
                <div class="widget-left">
                    YouTube
                </div>
                <div class="widget-right">
                    {{ $user->youtube }}
                </div>
            </div>
        @endif

        @if ($user->steam)
            <div class="widget-row">
                <div class="widget-left">
                    Steam
                </div>
                <div class="widget-right">
                    {{ $user->steam }}
                </div>
            </div>
        @endif

        @if ($user->xbox)
            <div class="widget-row">
                <div class="widget-left">
                    XBox Live
                </div>
                <div class="widget-right">
                    {{ $user->xbox }}
                </div>
            </div>
        @endif

        @if ($user->psn)
            <div class="widget-row">
                <div class="widget-left">
                    PSN
                </div>
                <div class="widget-right">
                    {{ $user->PSN }}
                </div>
            </div>
        @endif

        @if ($user->exp)
            <div class="widget-row">
                <div class="widget-left">
                    Current Experience
                </div>
                <div class="widget-right">
                    {{ $user->exp }}
                </div>
            </div>
        @endif
    </div>
@endsection