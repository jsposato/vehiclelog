<?php

class Role extends \BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array fields not allowed to be filled by a form
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * Return all available roles
     *
     * @return mixed
     */
    public function getRoles() {
        return Role::all();
    }

    /**
     * users
     *
     * return users for a role
     *
     * @return mixed
     *
     * @author  jsposato
     * @version 1.0
     */
    public function users() {
        return $this->hasMany( 'User' );
    }

}