<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-theme.min.css') }}

        @yield( 'header' )
    </head>

    <body>
        <!-- Container -->
        <div class="container-fluid">

            <!-- Content -->
            @yield('content')

        </div>

        @yield( 'footer' )

        {{--{{ HTML::script('js/jquery-1.11.1.min.js') }}--}}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>