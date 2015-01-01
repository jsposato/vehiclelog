@extends( 'layouts.default' )
@section( 'content' )
<div class="row">
    <ul>
        @if( ! Auth::check() )
            <li>{{ link_to_action( 'UsersController@displayLoginForm', 'Login' ) }}</li>
        @else
            <li>{{ link_to_action( 'UsersController@logout', 'Logout' ) }}</li>
        @endif
    </ul>
    <ul>
        <li>{{ link_to_action( 'users.index', 'Users' ) }}</li>
        <li>{{ link_to_action( 'logs.index', 'Logs' ) }}</li>
    </ul>
</div>
@stop