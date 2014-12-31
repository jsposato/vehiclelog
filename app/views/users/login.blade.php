@extends( 'layouts.default' )
@section( 'content' )
    <div class="row">
        <div class="form-group col-md-2 col-sm-4">
            {{ Form::open( [ 'route' => 'users.login', 'class' => 'form' ] ) }}
            <div class="form-group">
                {{ Form::label( 'username', 'Username: ' ) }}
                {{ Form::text( 'username', '', [ 'class' => 'form-control', 'placeholder' => 'Username' ] ) }}
                {{ $errors->first( 'username', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
            <div class="form-group">
                {{ Form::label( 'password', 'Password: ' ) }}
                {{ Form::password( 'password',  [ 'class' => 'form-control' ] ) }}
                {{ $errors->first( 'password', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
        </div>
    </div>
@stop