<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
    </head>
    <body>
    

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
        <h1 class="text-center">Personas</h1>
        <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Es Amigable?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $persona)
                    <tr>
                        <td>{{ $persona['id'] }}</td>
                        <td>{{ $persona['name'] }}</td>
                        <td>{{ $persona['surname'] }}</td>
                        <td>{{ $persona['years_old'] }}</td>
                        <td>
                            @if($persona['friendly'])
                                Si
                            @else
                                No
                            @endif
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    {{ dd(get_defined_vars()) }}

    {{--  {{ dd(get_defined_vars()) }}  --}}




































    
    </body>

    <script  src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script  src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</html>

