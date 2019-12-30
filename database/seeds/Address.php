<?php

use Illuminate\Database\Seeder;

class Address extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        $address = [];
        for ($i = 0; $i < 5; $i++) {
            $address[] = [
                "street" => $faker->streetName ,
                "number" => $faker->buildingNumber,
                "complement" => "3 depois",
                "cep" => $faker->postcode,
                "neighborhood" => $faker->cityPrefix,
                "city" => $faker->city,
                "state" => $faker->stateAbbr,
                "country" => $faker->country,
                "user_id" => 1
            ];
        }
        \App\Address::insert($address);
    }
}
