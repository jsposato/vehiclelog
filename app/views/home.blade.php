@extends( 'layouts.default' )
@section( 'content' )
<div class="row">
    <ul>
        <li>{{ link_to_action( 'users.index', 'Users') }}</li>
        <li>{{ link_to_action( 'UsersController@login', 'Login') }}</li>
        <li>{{ link_to_action( 'UsersController@logout', 'Logout') }}</li>
    </ul>
</div>
@stop