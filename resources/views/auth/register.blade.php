<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <title>Authorve</title>
</head>
<body style="background-image:url({{url('assets/Homepage.png')}}); background-size: cover; background-repeat: no-repeat;">
    <header>
        <nav class="navbar" style="align-items:center">
            <a class="name" href="{{ route('welcome') }}">Author<span style="color: #6988C3">ve.</span></a>
            <ul class="link-group">
                <li class="link"><a href="{{ route('login') }}">Login</a></li>
                <li class="link"><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="secform">
        <form action="{{ route('register') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <div>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Username">
                    @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="E-mail">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}" placeholder="Password">
                    @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Password Confirmation">
                </div>
            </div>
            <div class="check" style="display: flex; flex-direction: row;">
                <input type="checkbox" class="checkbox">
                <p>Agree to Terms and Conditions</p>
            </div>
            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>
