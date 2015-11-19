<html>
<head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin.css" />
</head>

<body>
@section('admin-sidebar')
    <aside class="admin-sidebar">
        <nav>
            <ul class="list-unstyled admin-nav">
                <li><a href="{{ action('AdminController@index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{ action('Admin\ArticleController@index') }}"><i class="fa fa-pencil"></i> Articles</a></li>
                <li><a href="#"><i class="fa fa-file"></i> Pages</a></li>
                <li><a href="#"><i class="fa fa-sticky-note"></i> Forums</a></li>
                <li><a href="#"><i class="fa fa-comment"></i> Comments</a></li>
                <li><a href="{{ action('Admin\UserController@index') }}"><i class="fa fa-users"></i> Users</a></li>
                <li class="sign-out"><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
            </ul>
        </nav>
    </aside>
@show

<section class="admin-content">
    @yield('content')

    <aside class="copyright">
        Copyright nonsense can go here
    </aside>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>