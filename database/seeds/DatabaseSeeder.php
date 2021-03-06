<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Store::class,
            Users::class,
            Category::class,
            Brand::class,
            Product::class,
            Product_Image::class,
            Address::class
        ]);

    }
}
