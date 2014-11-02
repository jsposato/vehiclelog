<?php

    use Illuminate\Auth\UserTrait;
    use Illuminate\Auth\UserInterface;
    use Illuminate\Auth\Reminders\RemindableTrait;
    use Illuminate\Auth\Reminders\RemindableInterface;

    class User extends Eloquent implements UserInterface, RemindableInterface
    {

        use UserTrait, RemindableTrait;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';

        /**
         * @var array fields allowed to be filled by a form
         */
        protected $fillable = [
            'username',
            'email',
            'password'
        ];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = array( 'password', 'remember_token' );

        /**
         * @var array validation rules
         */
        public static $rules = [
            'username'         => 'required|unique',
            'password'         => 'required|min:8',
            'confirm_password' => 'required|min:8',
            'email'            => 'required|email|unique'
        ];

        /**
         * roles
         *
         * return roles for a user
         *
         * @return mixed
         *
         * @author  jsposato
         * @version 1.0
         */
        public function roles() {
            return $this->belongsToMany( 'Role' )->withTimestamps();
        }

        /**
         * hasRole
         *
         * given a role name return whether the user has the role
         *
         * @param $name
         *
         * @return bool
         *
         * @author  jsposato
         * @version 1.0
         */
        public function hasRole( $name ) {
            foreach( $this->roles as $role ) {
                if( $role->name == $name ) return true;
            }
            return false;
        }

        public function assignRole( $role ) {
            return $this->roles()->attach( $role );
        }

        public function removeRole( $role ) {
            return $this->roles()->detach( $role );
        }
    }
