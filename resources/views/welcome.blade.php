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
            @include('layouts.nav')

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

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Launch demo modal
                    </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
