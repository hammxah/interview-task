<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="navbar navbar-inverse navbar-static-top">

    <div class="container">

        <a href="/" class="navbar-brand">Interview Task</a>
        <button class="navbar-toggle"
                data-toggle="collapse" data-target=".navHeaderCollapse"></button>

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="@yield('home_active')"><a href="/">Home</a></li>
                <li class="@yield('index_active')"><a href="{{ route('index_book') }}">All Books</a></li>
                <li class="@yield('create_active')"><a href="{{ route('create_book') }}">Add Book</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div style="margin-top: 15px; margin-bottom: 15px;">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
    </div>
    @yield('content')
</div>


<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">© 2021 - Interview Task</p>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
