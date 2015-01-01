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
            @if( Session::has( 'message' ) )
                <?php
                    $message   = Session::get( 'message');
                    $alertType = Session::get( 'alertType' );
                ?>
            <!-- flash messages -->
            <div class="row">
                <div class="alert {{{ $alertType }}} alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{{ $message }}}</strong>
                </div>
            </div>
            <!-- End flash messages -->
            @endif

            <!-- Content -->
            @yield('content')

        </div>

        @yield( 'footer' )

        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>