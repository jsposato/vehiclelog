<?php

class Role extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    protected $fillable = [ 'name' ];

    /**
     * Return all available roles
     *
     * @return mixed
     */
    public function getRoles() {
        return Role::all();
    }
}