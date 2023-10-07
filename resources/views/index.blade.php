<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->


            
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">pink paloma</a>
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="service">Service</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="aboutus">About Us</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="gallery">gallery </a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="booking">booking</a>
            </li>
            @if (Route::has('login'))
            <li class="nav-item active">
            @if (Auth::check())
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>  
                        <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
        </li>                    @endif
            </li>
            @endif
        
        </ul>
    </div>
</nav>


        </div>
    




    </body>
</html>
