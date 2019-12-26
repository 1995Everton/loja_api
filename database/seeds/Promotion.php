<?php

use Illuminate\Database\Seeder;

class Promotion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Promotion::insert([
            [
                'name' => '2 Tênis',
                'dt_start' => '2019-02-01',
                'dt_end' => '2019-02-28',
            ],
            [
                'name' => '3 Camisas',
                'dt_start' => '2019-02-01',
                'dt_end' => '2019-02-28',
            ],
            [
                'name' => '3 Calças',
                'dt_start' => '2019-02-01',
                'dt_end' => '2019-02-28',
            ]
        ]);
    }
}
