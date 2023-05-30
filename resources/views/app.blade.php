<!DOCTYPE html>
<html>
<head>
    <title>Authorve</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  style="background-color: #1B1B1E">
    <header>
        <nav class="navbar" style="position: fixed">
            <h1> Author<span style="color: #6988C3">ve.</span> </h1>
            @guest
            <ul class="link-group" style="margin-top: 10px">
                <li class="link"><a href="{{ route('index') }}">Home</a></li>
                <li class="link"><a href="{{ route('fabricate') }}">Fabricate</a></li>
                <li class="link"><a href="{{ route('login') }}">Login</a></li>
            </ul>
            @else
            <ul class="link-group" style="margin-top: 10px">
                <li class="link"><a href="{{ route('index') }}">Home</a></li>
                <li class="link"><a href="{{ route('fabricate') }}">Fabricate</a></li>
                <a class="link" href="{{ route('logout') }}" style="text-decoration:none; color:white"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="visibility: hidden">
                    @csrf
                </form>
            </ul>
            @endguest
        </nav>
    </header>

<div class="container">
    @yield('main')
    @yield('content')
</div>
</body>
</html>