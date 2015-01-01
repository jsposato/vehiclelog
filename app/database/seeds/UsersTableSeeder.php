<?php

// Composer: "fzaninotto/faker": "v1.3.0"
    use Faker\Factory as Faker;

    class UsersTableSeeder extends Seeder
    {

        public function run()
        {
            $faker = Faker::create();

            User::create(
                [
                    'username' => 'jsposato',
                    'email'    => 'jsposato@gmail.com',
                    'password' => Hash::make( 'codiesassy' )
                ]
            );
	    User::create(
		[
		    'username' => 'vsposato',
		    'email'    => 'vincent.sposato@gmail.com',
		    'password' => Hash::make( 'ntrubi213' )
		]
	    );
        }

    }
