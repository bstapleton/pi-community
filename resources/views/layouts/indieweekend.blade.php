<html>
<head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Palanquin:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/indieweekend3.css" />
</head>

<body>
@section('global-header')
    <nav class="navbar">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-gamepad"></i> Featured Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-video-camera"></i> Guest Streamers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-users"></i> Developer List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-gift"></i> Sponsors &amp; Prizes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-calendar-o"></i> Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-heart"></i> About QubeTubers</a>
            </li>
            <li class="nav-item pull-right">
                <a class="nav-link" href="#">Top of Page <i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
    </nav>

    <section class="container" role="region">
        <h1 class="masthead">IndieWeekend <span class="secondary-color">&lt;</span>3</h1>
    </section>

    <script src="https://donate.childsplaycharity.org/js/widget.min.js" data-event="69216d66e2365977b86f0fb29b86c1c3"></script>
@show

<div class="container">
    @yield('content')
</div>

@section('global-footer')

@show

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>