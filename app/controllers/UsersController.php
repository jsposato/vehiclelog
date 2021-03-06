<?php


class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all users
        $users = User::all();

        return View::make( 'users.index')->with( 'users', $users );
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$allRoles = Role::lists( 'name', 'id' );
		return View::make( 'users.create' )->with( 'allRoles', $allRoles );
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
        // check to make sure password was entered twice correctly
        if( ! Input::get( 'password' ) == Input::get( 'confirm_password' ) ) {
            return "Passwords do not match";
        }

        $validation = Validator::make( Input::all(), User::$rules );

        if( $validation->fails() ) {
            return Redirect::back()->withInput()->withErrors( $validation->messages() );
        }

		$user = new User;
		$user->username = Input::get( 'username' );
		$user->email    = Input::get( 'email' );
		$user->password = Hash::make( Input::get( 'password' ) );
		$user->role_id  = Input::get( 'role_id' );

        $user->save();

        return Redirect::route( 'users.index' );
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show( $id )
	{
		// get user by username
        $user = User::findOrFail( $id );

        return View::make( 'users.show' )->with( 'user', $user );
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit( $id )
	{
		// get user by username
		$user  = User::findOrFail( $id );
		$allRoles = Role::lists( 'name', 'id' );
		$roles = User::find( $user->id )->role();

		return View::make( 'users.edit' )->with( ['user' => $user, 'roles' => $roles, 'allRoles' => $allRoles ] );

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail( $id );
		$user->fill( Input::all() );
		$user->save();

		return View::make( 'users.show' )->with( 'user', $user );
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Login user
	 *
	 * @return string
	 */
	public function login() {
		$username = Input::get( 'username' );
		$password = Input::get( 'password' );

		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
			return Redirect::intended( '/' )->with( [
											'message'   => 'Successfully logged in',
											'alertType' => 'alert-success'
											] );
		}
		return Redirect::to( '/' )->with( [
											'message'   => 'Invalid username or password',
											'alertType' => 'alert-danger'
											] );
	}

	/**
	 * Logout user
	 *
	 * @return string
	 */
	public function logout() {
		Auth::logout();

		return Redirect::to( '/' )->with( [
											'message'   => 'Logged out!',
											'alertType' => 'alert-info'
											] );
	}

	/**
	 * show login form to user
	 *
	 * @return mixed
	 */
	public function displayLoginForm() {
		return View::make( 'users.login' );
	}

}