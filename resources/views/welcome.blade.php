<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <title>Authorve</title>
    <script src="js/app.js"></script>
</head>
<body style="background-image:url({{url('assets/HomepageBG.png')}}); background-size: cover; background-repeat: no-repeat;">

    <header>
        <nav class="navbar" style="align-items:center">
            <a class="name" href="{{ route('welcome') }}">Author<span style="color: #6988C3">ve.</span></a>
            <ul class="link-group">
                <li class="link"><a href="{{ route('login') }}">Login</a></li>
                <li class="link"><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
    </header>

    <div class="welcome">
        <h1> Welcome To <span class="typing" style="color: #6988C3; font-weight:400"></span></h1>
        <h2 style="margin-top: 0px; width: 400px;"> The best online bookshelf for all Author & Readers out there. </h2>
        <div class="login-link">
            <a href="{{ route('login') }}"><button>Log-In</button></a>
            <a href="{{ route('index') }}"">Guest Mode.</a>
        </div>
    </div>

    <div class="learn-more">
        <a href="#about">Learn More.</a>
        <img src="assets/downarrow.png" alt="" width="20px">
    </div>

    <section id="about">
        <div class="bg-text">
            <h1 class="background" style="font-size: 200px; filter: opacity(0.5);">Author<span style="color: #6988C3;">ve.</span></h1>
        </div>
        <div class="about">
            <div class="card">
                <img src="assets/ReadIC.png" alt="" width="50px">
                <h3>Read</h3>
                <h2>Read Original Works!</h2>
            </div>
            <div class="card">
                <img src="assets/BuyIC.png" alt="" width="50px">
                <h3>Buy</h3>
                <h2>Buy official published books!</h2>
            </div>
            <div class="card">
                <img src="assets/WriteIC.png" alt="" width="50px">
                <h3>Write</h3>
                <h2>Write your own story / fiction!</h2>
            </div>
        </div>
    </section>

    <footer class="footer">
        <ul class="social-icon">
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://www.linkedin.com/in/adeeva-rashida-655a44230/">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://www.instagram.com/ashida.radee/">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://www.instagram.com/ashida.radee/">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
        </ul>
        <p>&copy;2022 Adeeva Rashida | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>