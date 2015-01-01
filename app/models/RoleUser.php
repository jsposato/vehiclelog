<?php

class RoleUser extends \Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    protected $fillable = [ 'role_id', 'user_id' ];
}