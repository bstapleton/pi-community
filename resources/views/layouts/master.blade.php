<html>
<head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body>
@section('global-header')
    <section class="site-header" role="region">
        <div class="site-navbar">
            <div class="container">
                <nav class="site-navigation" role="navigation">
                    <ul class="list-inline">
                        <li><a href="#">Me</a></li>
                        <li><a href="#">My Stuff</a></li>
                        <li><a href="#">My Friends</a></li>
                        <li><a href="#">My Groups</a></li>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Discuss</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="stub user-stub circle">
                <div class="avatar-container circle">
                    <img class="avatar circle" src="/images/avatar.jpg" alt="" />
                </div>
            </div>
        </div>

        <div class="container">
            <div class="stub vitals-stub pull-left">
                <span class="user-name"></span>
                <p class="user-class">Level 7 RPG Nut</p>
                <ul class="influence-list">
                    <li>Influential in:</li>
                    <li><a href="#">#rpg</a>,</li>
                    <li><a href="#">#final fantasy</a>,</li>
                    <li><a href="#">6 more...</a></li>
                </ul>
            </div>

            <div class="brand pull-right">
                <span class="brand-name">Gaming <span class="sr-only">Pi</span></span>
                <img class="logo" src="/images/logo-small.png" alt="" />
                <p class="tagline">Games at their most delicious</p>
            </div>
        </div>
    </section>
@show

<div class="container">
    @yield('content')
</div>

@section('global-footer')
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Blog</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog post title here</a></li>
                        <li><a href="#">Blog post title here</a></li>
                        <li><a href="#">Blog post title here</a></li>
                        <li><a href="#">Blog post title here</a></li>
                        <li><a href="#">Blog post title here</a></li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <h4>Social</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Steam Group</a></li>
                        <li><a href="#">Player.me</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <h4>Get in touch</h4>
                    <form action="/">
                        <div class="field-group">
                            <input type="text" placeholder="Your email" />
                        </div>

                        <div class="field-group">
                            <textarea placeholder="Your message"></textarea>
                        </div>

                        <button type="button" class="btn btn-post">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@show

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>