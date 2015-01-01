@extends( 'layouts.default' )
@section( 'content' )
    <div class="row">
       <h1>Create New User</h1>
        <div class="form-group col-md-2 col-sm-4">
            {{ Form::open( [ 'route' => 'users.store', 'class' => 'form' ] ) }}
            <div class="form-group">
                {{ Form::label( 'username', 'Username: ' ) }}
                {{ Form::text( 'username', '', [ 'class' => 'form-control', 'placeholder' => 'Username' ] ) }}
                {{ $errors->first( 'username', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
             <div class="form-group">
                 {{ Form::label( 'email', 'Email: ' ) }}
                 {{ Form::text( 'email', '',  [ 'class' => 'form-control', 'placeholder' => 'Email Address' ]  ) }}
                {{ $errors->first( 'email', '<p class="alert alert-danger">:message</p>' ) }}
             </div>
            <div class="form-group">
                {{ Form::label( 'password', 'Password: ' ) }}
                {{ Form::password( 'password',  [ 'class' => 'form-control' ] ) }}
                {{ $errors->first( 'password', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
            <div class="form-group">
                {{ Form::label( 'confirm_password', 'Confirm Password: ' ) }}
                {{ Form::password( 'confirm_password', [ 'class' => 'form-control' ] ) }}
                {{ $errors->first( 'confirm_password', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'form-control btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop