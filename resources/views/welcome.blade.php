<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home - TheCoffeeCo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .masthead {
                height: 100vh;
                min-height: 500px;
                background-image: url('/images/bg.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                }
        </style>
    </head>


    <body>

        <!-- Full Page Image Header with Vertically Centered Content -->
        <header class="masthead">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
                <p class="lead">A great starter layout for a landing page</p>
              </div>
            </div>
          </div>
        </header>
        <script src="js/app"></script>
    </body>
</html>
