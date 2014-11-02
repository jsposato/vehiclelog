@extends( 'layouts.default' )
@section( 'content' )
    <div class="row">
       <h1>Create New User</h1>

        <div class="form-group col-md-2 col-sm-4">
            {{ Form::open( array( 'class' => 'form' )) }}
            <div>
                {{ Form::label( 'username', 'Username: ' ) }}
                {{ Form::text( 'username', 'Username', array( 'class' => 'form-control' ) ) }}
            </div>
             <div>
                 {{ Form::label( 'email', 'Email: ' ) }}
                 {{ Form::text( 'email', 'Email Address', array( 'class' => 'form-control' ) ) }}
             </div>
            <div>
                {{ Form::label( 'password', 'Password: ' ) }}
                {{ Form::text( 'password', '', array( 'class' => 'form-control' ) ) }}
            </div>
            <div>
                {{ Form::label( 'password_confirm', 'Confirm Password: ' ) }}
                {{ Form::text( 'password_confirm', '', array( 'class' => 'form-control' ) ) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
@stop