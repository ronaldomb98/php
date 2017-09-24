<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
    </head>
    <body>

    <div class="row"></div>
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
                    CRUD Sencillo
                </div>

                <div class="links">
                    <a class="bnt btn-default btn-lg" href="https://laravel.com/docs">Documentation</a>
                </div>
            </div>
        </div>
    </body>

    <script  src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script  src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</html>
