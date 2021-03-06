<?php

class Log extends \BaseModel {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'logs';

	/**
	 * @var array fields not allowed to be filled by a form
	 */
	protected $guarded = [];

	/**
	 * @var array validation rules
	 */

	// @todo flesh out validation rules
	public static $rules = [
		'create' => [
			'username'         => 'required|unique:users',
			'password'         => 'required|min:8',
			'confirm_password' => 'required|min:8',
			'email'            => 'required|email|unique:users',
		],
		'update' => [
			'email'            => 'required|email|unique:users',
		]
	];

}