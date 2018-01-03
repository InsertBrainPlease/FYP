<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PMFSTM Election System</title>
        
        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/typewriter.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Normalize -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{('css/bootstrap.css') }}">
        <!-- Owl -->
        <link rel="stylesheet" type="text/css" href="{{('css/owl.css') }}">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="{{('css/animate.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{('fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
        <!-- Elegant Icons -->
        <link rel="stylesheet" type="text/css" href="{{('fonts/eleganticons/et-icons.css') }}">
        <!-- Main style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/cardio.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00ccff;
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
                color: white;
                padding: 0 25px;
                font-size: 20px;
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

    <div class="preloader">
            <img src="loader.gif" alt="Preloader image">
     </div>
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
                    <h2>Welcome to PMFSTM Election System</h2>
                </div>

            <div class="preloader">
            <img src="loader.gif" alt="Preloader image">
            </div>
                
        <header id="intro">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <div class="content">
                        <div class="title m-b-md">
                            <h2 class="black">Welcome to PMFSTM Election System</h2>
                        </div>
                            <h3 class="black">Vote now.</h3>
                            <br>
                            <br>
                            <br>
                            <h2 class="black typed">One vote can make the change.</h2>
                            <span class="typed-cursor">|</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
            </div>
        </div>
    </body>
</html>

