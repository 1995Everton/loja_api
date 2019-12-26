<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Principal
        \App\Category::insert([
            [
                'name' => 'Homens',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/2b015c3f71a5d__TENISWHITE.gif',
                'order' => 1
            ],
            [
                'name' => 'Mulheres',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'order' => 2


            ],
            [
                'name' => 'Novidades',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'order' => 3
            ],
            [
                'name' => 'Marcas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/9bf6dc1635d5__banners_drop_menu_topmarcas.png',
                'order' => 4
            ],
            [
                'name' => 'Esportes',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/3b46364aeb8__Tenis_running.png',
                'order' => 5
            ]
        ]);
        // Sub Homens
        \App\Category::insert([
            [
                'name' => 'Roupas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 1,
                'order' => 1
            ],
            [
                'name' => 'Calçados',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 1,
                'order' => 2
            ],
            [
                'name' => 'Acessórios',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 1,
                'order' => 3
            ]
        ]);

        // Sub Mulheres
        \App\Category::insert([
            [
                'name' => 'Roupas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 2,
                'order' => 1
            ],
            [
                'name' => 'Calçados',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 2,
                'order' => 2
            ],
            [
                'name' => 'Acessórios',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 2,
                'order' => 3
            ]
        ]);

        // Sub Novidades
        \App\Category::insert([
            [
                'name' => 'Masculino',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 3,
                'order' => 1
            ],
            [
                'name' => 'Feminino',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 3,
                'order' => 2
            ]
        ]);

        // Sub Marcas
        /* ... */

        // Sub Homens/Roupas
        \App\Category::insert([
            [
                'name' => 'Camisetas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 6,
                'order' => 1
            ],
            [
                'name' => 'Moletom',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 6,
                'order' => 2
            ],
            [
                'name' => 'Bermudas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 6,
                'order' => 3
            ],
            [
                'name' => 'Calças',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 6,
                'order' => 4
            ],
            [
                'name' => 'Camisas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 6,
                'order' => 5
            ]
        ]);

        // Sub Homens/Calçados
        \App\Category::insert([
            [
                'name' => 'Tênis',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 7,
                'order' => 1
            ],
            [
                'name' => 'Botas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 7,
                'order' => 2
            ],
            [
                'name' => 'Tênis Casual',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 7,
                'order' => 3
            ],
            [
                'name' => 'Sapatênis',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 7,
                'order' => 4
            ],
            [
                'name' => 'Chinelos',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 7,
                'order' => 5
            ]
        ]);

        // Sub Homens/Acessórios
        \App\Category::insert([
            [
                'name' => 'Bonés',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 8,
                'order' => 1
            ],
            [
                'name' => 'Relógios',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 8,
                'order' => 2
            ],
            [
                'name' => 'Mochilas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 8,
                'order' => 3
            ],
            [
                'name' => 'Carteiras',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 8,
                'order' => 4
            ],
            [
                'name' => 'Óculos de sol',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 8,
                'order' => 5
            ]
        ]);

        // Sub Mulheres/Roupas
        \App\Category::insert([
            [
                'name' => 'Moletom',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 9,
                'order' => 1
            ],
            [
                'name' => 'Jaquetas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 9,
                'order' => 2
            ],
            [
                'name' => 'Vestidos',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 9,
                'order' => 3
            ],
            [
                'name' => 'Shorts',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 9,
                'order' => 4
            ]
        ]);

        // Sub Mulheres/Calçados
        \App\Category::insert([
            [
                'name' => 'Tênis',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 10,
                'order' => 1
            ],
            [
                'name' => 'Botas e Coturnos',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 10,
                'order' => 2
            ],
            [
                'name' => 'Slip On',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 10,
                'order' => 3
            ],
            [
                'name' => 'Sandálias',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 10,
                'order' => 4
            ],
            [
                'name' => 'Tênis Vans',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 10,
                'order' => 5
            ]
        ]);

        // Sub Mulheres/Acessórios
        \App\Category::insert([
            [
                'name' => 'Bolsas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 11,
                'order' => 1
            ],
            [
                'name' => 'Mochilas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 11,
                'order' => 2
            ],
            [
                'name' => 'Pochete',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 11,
                'order' => 3
            ],
            [
                'name' => 'Carteiras',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 11,
                'order' => 4
            ],
            [
                'name' => 'Óculos de sol',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/1db521a46465d__2tenis299.png',
                'category_id' => 11,
                'order' => 5
            ]
        ]);

        // Sub Novidades/Masculino
        \App\Category::insert([
            [
                'name' => 'Bermudas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 12,
                'order' => 1
            ],
            [
                'name' => 'Jaquetas',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 12,
                'order' => 2
            ]
        ]);

        // Sub Novidades/Feminino
        \App\Category::insert([
            [
                'name' => 'Biquínes',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 13,
                'order' => 1
            ],
            [
                'name' => 'Maiôs',
                'active' => true,
                'photo' => 'https://dafitistatic-a.akamaihd.net/dynamic_yield/cms/static/kanui/images/351cbf47e339__3pecas149.png',
                'category_id' => 13,
                'order' => 2
            ]
        ]);
    }
}
