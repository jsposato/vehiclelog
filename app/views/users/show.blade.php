@extends( 'layouts.default' )
@section( 'content' )
<h2>Viewing user {{{ $user->username }}}</h2>
{{ link_to_route( 'users.index', 'Back to Index', null, ['class' => 'btn btn-sm btn-default']) }}<br /><br />
    <div class="row">
        <div class="col-md-4">
            <strong>Email Address:</strong>
        </div>
        <div class="col-md-4">
            {{{ $user->email }}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Role:</strong>
        </div>
        <div class="col-md-4">
            {{{ $user->role->name }}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Created On:</strong>
        </div>
        <div class="col-md-4">
            {{ date("m/d/Y",strtotime($user->created_at)) }} at {{ date("g:ha",strtotime($user->created_at)) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Modified On:</strong>
        </div>
        <div class="col-md-4">
            {{ date("m/d/Y",strtotime($user->updated_at)) }} at {{ date("g:ha",strtotime($user->updated_at)) }}
        </div>
    </div>

    <br /><a href="/users/{{{$user->id }}}/edit" class="btn btn-primary">Edit</a>
@stop