<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::insert([
            [
                'name' => 'TÊNIS CASUAL ADIDAS X_PLR PRETO',
                'details' => 'Explore a cidade com um estilo clean e conforto supremo. O X_PLR minimalista preserva um visual distinto e simples. O cabedal leve e forrado em mesh é realçado com sobreposições de nobuck e uma lateral contrastante que se integra ao sistema de amarração rápida.Cabedal de malha Forro de mesh As Três Listras de precinta; calcanhar de nobuck Experimente o conforto e a performance da palmilha OrthoLite®; sistema rápido de amarração Entressola moldada em EVA para um amortecimento leve Solado de borracha',
                'miniature' => 'https://t-static.dafiti.com.br/Fv_vLAihyjl3jG957vUlYxcHDOA=/fit-in/430x623/static.dafiti.com.br/p/adidas-t%c3%aanis-casual-adidas-x_plr-preto-4055-7286225-1-zoom.jpg',
                'unitary_value' => 59.12,
                'stock' => 50,
                'last_sale' => '2019-12-02',
                'cost_price' => 20.10,
                'category_id' => 19,
                'brand_id' => 1
            ],
            [
                'name' => 'TÊNIS VANS ATWOOD BEGE',
                'details' => 'Tênis Vans Atwood Bege, com etiqueta de logo da marca, acabamento pespontado e fecho por cadarço.',
                'miniature' => 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg',
                'unitary_value' => 249.90,
                'stock' => 10,
                'last_sale' => '2019-12-03',
                'cost_price' => 180.90,
                'category_id' => 19,
                'brand_id' => 2
            ],
            [
                'name' => 'TÊNIS VANS MN FILMORE DECON (CANVAS) CINZA',
                'details' => 'Tênis Vans Mn Filmore Decon (Canvas) Cinza',
                'miniature' => 'https://t-static.dafiti.com.br/-Uo7JmgWzlxcxopEnbLBe9bS-Xw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-bege-6405-0260322-1-zoom.jpg',
                'unitary_value' => 279.99,
                'stock' => 20,
                'last_sale' => '2019-12-03',
                'cost_price' => 190.90,
                'category_id' => 19,
                'brand_id' => 2
            ],
            [
                'name' => 'TÊNIS VANS FILMORE (SUEDE CANVAS) PRETO',
                'details' => 'Tênis Vans Filmore (Suede Canvas) Preto',
                'miniature' => 'https://t-static.dafiti.com.br/FfjnRA7tv_cbKNZJo7KrJyGWuQw=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-filmore-%28suede-canvas%29-preto-2768-4971764-1-zoom.jpg',
                'unitary_value' => 349.99,
                'stock' => 50,
                'last_sale' => '2019-12-03',
                'cost_price' => 250.90,
                'category_id' => 19,
                'brand_id' => 2
            ],
            [
                'name' => 'TÊNIS VANS ATWOOD CINZA',
                'details' => 'Tênis Vans Atwood Cinza',
                'miniature' => 'https://t-static.dafiti.com.br/TIeVx-hNG6QnTtj_ulEnT18LyzI=/fit-in/430x623/static.dafiti.com.br/p/vans-t%c3%aanis-vans-atwood-cinza-0242-6134054-1-zoom.jpg',
                'unitary_value' => 214.99,
                'stock' => 8,
                'last_sale' => '2019-12-03',
                'cost_price' => 100.90,
                'category_id' => 19,
                'brand_id' => 2
            ],
            [
                'name' => 'Nike SB Portmore II Solar Canvas Preto',
                'details' => 'Possui tecnologia Solarsoft: Proporciona flexibilidade, sensibilidade e conforto.',
                'miniature' => 'https://t-static.dafiti.com.br/-qQnawl3obTmMfsq8THgDbjrqpQ=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-sb-portmore-ii-solar-canvas-preto-5671-7088103-1-zoom.jpg',
                'unitary_value' => 229.99,
                'stock' => 18,
                'last_sale' => '2019-12-03',
                'cost_price' => 140.90,
                'category_id' => 19,
                'brand_id' => 5
            ],
            [
                'name' => 'TÊNIS NIKE ZOOM WINFLO 6 PRETO',
                'details' => 'Permite resposta rápida de movimentos com leveza, oferecendo proteção contra impactos, maior estabilidade e sensação de baixo perfil.',
                'miniature' => 'https://t-static.dafiti.com.br/RG2nLDBMnIqbI6kigoh3lvcqUQ4=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-zoom-winflo-6-preto-2522-0319074-1-zoom.jpg',
                'unitary_value' => 399.90,
                'stock' => 8,
                'last_sale' => '2019-12-03',
                'cost_price' => 200.90,
                'category_id' => 19,
                'brand_id' => 5
            ],
            [
                'name' => 'TÊNIS NIKE CITY TRAINER 2 VERMELHO',
                'details' => 'Palmilha com espuma de alta densidade e com memória que se molda aos pés, proporcionando conforto imediato.',
                'miniature' => 'https://t-static.dafiti.com.br/R6RbAB8KbmSYgRw0z0SObMhogXg=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-city-trainer-2-vermelho-6202-3407015-1-zoom.jpg',
                'unitary_value' => 169.89,
                'stock' => 2,
                'last_sale' => '2019-12-03',
                'cost_price' => 80.90,
                'category_id' => 19,
                'brand_id' => 5
            ],
            [
                'name' => 'TÊNIS NIKE DOWNSHIFTER 9 PRETO',
                'details' => 'Tênis Nike Downshifter 9 Preto',
                'miniature' => 'https://t-static.dafiti.com.br/oMV0EgMn8mVS4dig3XuR4kHL8QU=/fit-in/430x623/static.dafiti.com.br/p/nike-t%c3%aanis-nike-downshifter-9-preto-9852-5786015-1-zoom.jpg',
                'unitary_value' => 229.99,
                'stock' => 2,
                'last_sale' => '2019-12-03',
                'cost_price' => 120.90,
                'category_id' => 19,
                'brand_id' => 5
            ],
            [
                'name' => 'TÊNIS OAKLEY MODOC PRETO',
                'details' => 'Tênis Oakley Modoc Preto',
                'miniature' => 'https://t-static.dafiti.com.br/knSaJ_tfyVbFPtr1THw4A8jddSk=/fit-in/430x623/static.dafiti.com.br/p/oakley-t%c3%aanis-oakley-modoc-preto-9346-7904214-1-zoom.jpg',
                'unitary_value' => 384.99,
                'stock' => 5,
                'last_sale' => '2019-12-03',
                'cost_price' => 220.90,
                'category_id' => 19,
                'brand_id' => 6
            ],
            [
                'name' => 'TÊNIS OAKLEY FLAK 1.3 PRETO',
                'details' => 'Tênis Oakley Flak 1.3 Preto',
                'miniature' => 'https://t-static.dafiti.com.br/2x5nNhB6nT3cG5PBndoyh9Nk1eE=/fit-in/430x623/static.dafiti.com.br/p/oakley-t%c3%aanis-oakley-flak-1.3-preto-9942-7504214-1-zoom.jpg',
                'unitary_value' => 454.99,
                'stock' => 1,
                'last_sale' => '2019-12-03',
                'cost_price' => 320.90,
                'category_id' => 19,
                'brand_id' => 6
            ],
            [
                'name' => 'BOTA OAKLEY HALFTRACK VERDE',
                'details' => 'Bota Oakley Halftrack Verde',
                'miniature' => 'https://t-static.dafiti.com.br/8OZlQtR-_lRDSO7MEcBsX6rJP_g=/fit-in/430x623/static.dafiti.com.br/p/oakley-bota-oakley-halftrack-verde-6751-5135994-1-zoom.jpg',
                'unitary_value' => 569.90,
                'stock' => 1,
                'last_sale' => '2019-12-03',
                'cost_price' => 420.90,
                'category_id' => 19,
                'brand_id' => 6
            ],
            [
                'name' => 'TÊNIS CONVERSE CT ALL STAR CORE OX PRETO',
                'details' => 'Tênis Converse CT All Star Core Ox Preto, com detalhe de ilhós, acabamento pespontado e fecho por cadarço.',
                'miniature' => 'https://t-static.dafiti.com.br/nB0MQDgju2jBkTdGLItpL3HJbf4=/fit-in/430x623/static.dafiti.com.br/p/converse-t%c3%aanis-converse-ct-all-star-core-ox-preto-1189-2676032-1-zoom.jpg',
                'unitary_value' => 149.90,
                'stock' => 7,
                'last_sale' => '2019-12-03',
                'cost_price' => 20.90,
                'category_id' => 19,
                'brand_id' => 4
            ]
        ]);
    }
}
