<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home - TheCoffeeCo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/G15.css') }}">
        <!-- Styles -->
    </head>


    <body>
        <div id="app">
            @include('layouts.nav') <!--References layout/nav.blade/php which is the navigation header-->

            <!-- Full Page Image Header with Vertically Centered Content -->
            <div class="masthead">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div style="top: 30%;" class="col-12">
                    <h1 class="font-weight-bold">COFFEE FOR YOU</h1>
                    <p class="lead">A better cup, every day, your way. </p>
                    <a href="/shop" class="btn btn-primary" role="button" >Shop</a>
                  </div>
                </div>
              </div>
            </div>

            
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
