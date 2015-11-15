{{-- / --}}

@extends('layouts.master')

@section('global-header')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <aside>
                <div class="nav-block">
                    <div class="block-heading">
                        <h3>Welcome home</h3>
                    </div>
                    <div class="block-content">
                        <nav>
                            <ul>
                                <li><a href="#">Edit my profile</a></li>
                                <li><a href="#">Edit interests</a></li>
                                <li><a href="#">Search for groups</a></li>
                                <li><a href="#">Find new friends</a></li>
                            </ul>
                        </nav>
                    </div>
                    <footer class="block-footer">
                        Log out
                    </footer>
                </div>
            </aside>
        </div>

        <div class="col-sm-8">
            <main class="site-body row" role="main">
                <div class="col-sm-6">
                    <article class="block">
                        <header class="block-heading">
                            <h3>Standard content block</h3>
                        </header>
                        <div class="block-content">
                            <p>Some content will go here...</p>
                        </div>
                        <footer class="block-footer">
                            Some stats etc will go here...
                        </footer>
                    </article>
                </div>

                <div class="col-sm-6">
                    <article class="block">
                        <header class="block-heading">
                            <h3>Transparent content block</h3>
                        </header>
                        <div class="block-content transparent">
                            <p>This is an example of a partially transparent content block.</p>
                        </div>
                        <footer class="block-footer">
                            Some stats etc will go here...
                        </footer>
                    </article>
                </div>

                <div class="col-sm-6">
                    <article class="block">
                        <header class="block-heading">
                            <h3>Content block</h3>
                        </header>
                        <div class="block-content">
                            <p>Some content will go here...</p>
                        </div>
                        <footer class="block-footer">
                            Some stats etc will go here...
                        </footer>
                    </article>
                </div>

                <div class="col-sm-6">
                    <article class="block">
                        <header class="block-heading">
                            <h3>Content block</h3>
                        </header>
                        <div class="block-content">
                            <p>Some content will go here...</p>
                        </div>
                        <footer class="block-footer">
                            Some stats etc will go here...
                        </footer>
                    </article>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('global-footer')
    @parent
@endsection