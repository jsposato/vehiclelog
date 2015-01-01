@extends( 'layouts.default' )
@section( 'content' )
    {{ link_to_route( 'users.show', 'Back to View', $user->id, ['class' => 'btn btn-sm btn-default']) }}<br /><br />

    <div class="row">
       <h1>Edit User</h1>
        <div class="form-group col-md-6 col-sm-6">
            {{ Form::model( $user, ['method' => 'PUT', 'route' => ['users.update', $user->id]] ) }}
            <div class="form-group">
                {{ Form::label( 'username', 'Username: ' ) }}
                {{ Form::text( 'username', null, [ 'class' => 'form-control',
                                                 'placeholder' => 'Username',
                                                 'disabled' => 'true'
                                                 ] ) }}
                {{ $errors->first( 'username', '<p class="alert alert-danger">:message</p>' ) }}
            </div>
             <div class="form-group">
                 {{ Form::label( 'email', 'Email: ' ) }}
                 {{ Form::email( 'email', null,  [ 'class' => 'form-control',
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
    <?php //dd($user); ?>
@stop