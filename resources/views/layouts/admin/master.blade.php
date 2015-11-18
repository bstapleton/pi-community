<html>
<head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin.css" />
</head>

<body>
<div class="container-fluid">
    <div class="row">
        @section('admin-sidebar')
            <div class="col-sm-4 col-md-3">
                <aside class="admin-sidebar">
                    <nav>
                        <ul class="list-unstyled">
                            <li><a href="{{ action('AdminController@index') }}">Dashboard</a></li>
                            <li><a href="{{ action('Admin\ArticleController@index') }}">Articles</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Comments</a></li>
                            <li><a href="{{ action('Admin\UserController@index') }}">Users</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
        @show

        <div class="col-sm-8 col-md-9">
            <section class="admin-content">
                @yield('content')
            </section>

            <aside class="copyright">
                Copyright nonsense can go here
            </aside>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>