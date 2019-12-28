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
        \App\ProductImage::insert([
            [
                'name' => 'Nome Imagem',
                'url' => 'https://t-static.dafiti.com.br/Fv_vLAihyjl3jG957vUlYxcHDOA=/fit-in/430x623/static.dafiti.com.br/p/adidas-t%c3%aanis-casual-adidas-x_plr-preto-4055-7286225-1-zoom.jpg',
                'product_id' => 1
            ],
            [
                'name' => 'Nome Imagem',
                'url' => 'https://static.dafiti.com.br/p/adidas-T%C3%AAnis-Casual-Adidas-X_PLR-Preto-4060-7286225-2-zoom.jpg',
                'product_id' => 1
            ],
            [
                'name' => 'Nome Imagem',
                'url' => 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg',
                'product_id' => 2
            ],
            [
                'name' => 'Nome Imagem',
                'url' => 'https://static.dafiti.com.br/p/Vans-T%C3%AAnis-Vans-Atwood-Bege-6412-0260322-2-zoom.jpg',
                'product_id' => 2
            ]
        ]);
    }
}
