@extends( 'layouts.default' )
@section( 'content' )
    <div class="row">
       <h1>Edit User</h1>
        <div class="form-group col-md-2 col-sm-4">
            {{ Form::model( $user, ['route' => ['users.update', $user->id ]] ) }}
            <div class="form-group">
                {{ Form::label( 'username', 'Username: ' ) }}
                {{ Form::text( 'username', '', [ 'class' => 'form-control',
                                                 'placeholder' => 'Username',
                                                 'disabled' => 'true'
                                                 ] ) }}
                {{ $errors->first( 'username', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
             <div class="form-group">
                 {{ Form::label( 'email', 'Email: ' ) }}
                 {{ Form::email( 'email', '',  [ 'class' => 'form-control',
                                                 'placeholder' => 'Email Address'
                                                 ]  ) }}
                {{ $errors->first( 'email', '<p class="alert alert-danger">:message</p>' ) }}
             </div>
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'form-control btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop