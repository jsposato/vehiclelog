@extends( 'layouts.default' )
@section( 'content' )
<div class="row">
    <h1>All Users</h1>
    <div class="col-md-12 col-sm-12">
        <a href="{{ route( 'users.create' ) }}" class="btn btn-info">Add User</a><br /><br />
    </div>
    <div class=" col-md-12 col-sm-12 ">
        <table class="table-condensed table-striped table-bordered">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
          @if( $users->count() )
              @foreach ( $users as $user )
                  <tr>
                      <td>{{ $user->username }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->updated_at }}</td>
                      <td>
                          {{ link_to( "/users/{$user->id}", "View", ['class' => 'btn btn-sm btn-info'] ) }}
                          {{ link_to( "/users/{$user->id}/edit", "Edit", ['class' => 'btn btn-sm btn-primary'] ) }}
                      </td>
                  </tr>
              @endforeach
          @else
              <tr>There are no users in the system!</tr>
          @endif
        </table>
    </div>
</div>
@stop