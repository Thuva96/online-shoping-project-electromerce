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
                'role_id' => 1,
                'name' => 'thuvarakaThiraviyarasa',
                'email' => 'thuvarakaaju@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eWXPKaZiw/cX8d1OWe3xTei551h2THHK0C8JAzL1XoPs4erRSrShO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-12-24 14:31:06',
                'updated_at' => '2021-01-19 05:32:55',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R5BPzYgLbyczxjtly6Q4f.kwNx6wkWB32EshVxpaB9A9O.41aYMWe',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-01-19 05:42:51',
                'updated_at' => '2021-01-19 05:42:51',
            ),
        ));
        
        
    }
}