<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(array(
            'name' => 'Everton',
            'username' => 'everton',
            'email' => 'everton@email.com',
            'password' => Hash::make('123')
        ));
    }
}
