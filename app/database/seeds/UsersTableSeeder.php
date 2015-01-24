<?php

// Composer: "fzaninotto/faker": "v1.3.0"
    use Faker\Factory as Faker;

    class UsersTableSeeder extends Seeder {

        public function run() {

            $faker = Faker::create();

            User::create(
                [
                    'username' => 'jsposato',
                    'email'    => 'jsposato@gmail.com',
                    'password' => Hash::make( 'codiesassy' ),
                    'role_id'  => 1
                ]
            );
            User::create(
                [
                    'username' => 'vsposato',
                    'email'    => 'vincent.sposato@gmail.com',
                    'password' => Hash::make( 'ntrubi213' ),
                    'role_id'  => 2
                ]
            );

            // INSERT fake users with Member roles
            for ( $i = 0; $i < 10; $i++ ) {
                User::create(
                    [
                        'username' => $faker->userName,
                        'email'    => $faker->email,
                        'password' => Hash::make( $faker->macAddress ),
                        'role_id'  => 2
                    ]
                );
            }
        }
    }
