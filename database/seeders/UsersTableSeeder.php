<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'us_name' => 'Hoang',
                'email' => 'hd6112002@gmail.com',
                'us_address' => NULL,
                'us_phone' => NULL,
                'us_gender' => NULL,
                'us_birthday' => NULL,
                'us_email_verified_at' => NULL,
                'password' => '$2y$10$DqsfIjUroMCktJxdJYIbse/K9QXHT9zfq7aHut143NgUZ/aYmZbvC',
                'remember_token' => NULL,
                'created_at' => '2024-03-26 01:42:00',
                'updated_at' => '2024-03-26 01:42:00',
            ),
        ));
        
        
    }
}