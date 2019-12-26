<?php

use Illuminate\Database\Seeder;

class Product_Image extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product_Image::insert([
            [
                'name' => 'Nome Imagem',
                'url' => '',
                'product_id' => 1
            ]
        ]);
    }
}
