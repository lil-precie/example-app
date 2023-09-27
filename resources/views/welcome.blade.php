<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

        <title>Laravel</title>

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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    pink paloma
                </div>

            

<body>

<nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid d-flex justify-content-start">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="#">ABOUT</a>
            <li class="nav-item">
            <a class="nav-link" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
            </li>
        </ul>
    </div>
        <img src="logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"> 
            <h4>PINK PALOMA</h4>

    <div class="container-fluid p-5 d-flex justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">GALLERY</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#p">CONTACT</a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn rounded-pill btn-outline-danger">BOOK ONLINE🗓️</button>
            </li>
        </ul>
    </div>

    </nav>
        <div class="container 1">
            <h4 class="text-end">meet the  team </h4>
            <h4 class="text-end">TALENTED <br>& HIGHLY SKILLED <br>STYLIST AND NAIL TECHS</h4>
            <h6 class="text-end">At pink paloma , we specialize from nails , hair , lashes. <br>All of these beautiful things will happen .Exercising the <br>imagination , being creative. The secret to doing anything is <br>believing that you can do it.Anything that you can do<br> strong enough,you can do.</h6>
        </div>

        <div class="container 2">
            <h3 class="text-center">ABOUT THE SALON</h3>
            <hr>


            <div class="row">
                <div class="col-sm-6"><h6>Write about yourself and what you do right here , or about the  business and how it started. Let your own imagination be your guide. The secret to doing anytging is believing you can do it .Take it easy.as long as you believe .The very fact that you are aware of suffering is enough reason to be overjoyed that youre alive and can</h6>
                </div>
                <div class="col-sm-6"><h6>experience it.Even the worst thing we can do here is good. This is your creation -and its just as unique and special as you are. We'll  play with clouds today.of course he's happy little stone, cause we don't have any other kind.Put your feelings into it , your hearr , itsyour world. Build a connection with your audience.</h6>
                </div>
            </div>



            <h3 class="text-center">come visit us!</h3>
            <div class="col-md-12 text-center">
                <button type="button" class="btn rounded-pill btn-outline-dark"><h6>BOOK YOUR APPOINTMENT</h6></button>
            </div>

        </div>
            <div class="container 3">
            <!-- one card -->
                <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">PRECIOUS</h4>
                <p class="card-text">write a team members bio right here, to help build a connection with a potential client visiting thios page .All of the beautiful things will happen .Exercising the imagination ,being creative</p>
                </div>
                </div>
            </div>
    

        
            <!-- 2nd card -->
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">ANAABELLA</h4>
                <p class="card-text">write a team members bio right here, to help build a connection with a potential client visiting thios page .All of the beautiful things will happen .Exercising the imagination ,being creative.</p>
                
                </div>
            </div>


        <div class="container 4">
            <!-- 3rd card -->
            <div class="card float-end" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">CHRISTINE</h4>
                <p class="card-text">write a team members bio right here, to help build a connection with a potential client visiting thios page .All of the beautiful things will happen .Exercising the imagination ,being creative.</p>
                
                </div>
            </div>

        

            <!-- 4th card -->
            <div class="card float-end" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">SAMARA</h4>
                <p class="card-text">write a team members bio right here, to help build a connection with a potential client visiting thios page .All of the beautiful things will happen .Exercising the imagination ,being creative.</p>
        
                
                </div>
            </div>
        </div>
    
</body>
</html>
            </div>
        </div>
    </body>
</html>
