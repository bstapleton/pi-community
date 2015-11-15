{{-- /indieweekend/3 --}}

@extends('layouts.indieweekend')

@section('global-header')
    @parent
@endsection

@section('content')
    <section id="stream" class="row" role="region">
        <div class="col-md-8">
            Video here
        </div>

        <div class="col-md-4">
            Chat here
        </div>
    </section>

    <section id="games" class="row" role="region">
        Games can go here
    </section>

    <section id="streamers" class="row" role="region">
        Streamers can go here
    </section>

    <section id="donators" class="row" role="region">
        Top donators can go here
    </section>

    <section id="schedule" class="row" role="region">
        Schedule can go here
    </section>
@endsection

@section('global-footer')
    @parent
@endsection