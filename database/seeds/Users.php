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
        $faker = Faker\Factory::create('pt_BR');
        $value = [];
        for ($i = 0; $i < 5; $i++) {
            $value[] = [
                'name' => $faker->name,
                'username' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('123'),
                'manager' => true,
                'telephone' => $faker->e164PhoneNumber,
                'genre' => 'M',
                'rg' => '136108696',
                'cpf'=> '11438374798',
            ];
        }
        \App\User::insert($value);
    }
}
