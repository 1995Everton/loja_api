<?php

use Illuminate\Database\Seeder;

class Brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::insert([
            [
                'name' => 'Adidas',
                'logo' => 'https://logodownload.org/wp-content/uploads/2014/07/adidas-logo.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/kanui/02-05-17-Vans_landing.jpg'
            ],
            [
                'name' => 'Vans',
                'logo' => 'http://pluspng.com/img-png/vans-png-addthis-sharing-sidebar-600.png',
                'banner' => ''
            ],
            [
                'name' => 'Hurley',
                'logo' => 'https://i.pinimg.com/originals/97/ff/4b/97ff4be38b0123b660446bf186267062.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/onsite/2016setembro/brand-hurley-min.jpg'
            ],
            [
                'name' => 'Converse',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Converse_logo.svg/325px-Converse_logo.svg.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-converse-kanui.jpg'
            ],
            [
                'name' => 'Adidas',
                'logo' => 'https://logodownload.org/wp-content/uploads/2014/07/adidas-logo.png',
                'banner' => ''
            ],
            [
                'name' => 'Nike',
                'logo' => 'http://pngimg.com/uploads/nike/nike_PNG12.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-nike-sb-kanui.jpg'
            ],
            [
                'name' => 'Oakley',
                'logo' => 'https://logodownload.org/wp-content/uploads/2014/10/Oakley-logo.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-oakley-kanui.jpg'
            ],
            [
                'name' => 'Calvin Klein',
                'logo' => 'https://logodownload.org/wp-content/uploads/2014/11/Calvin-klein-logo-6.png',
                'banner' => 'https://dafitistatic-a.akamaihd.net/cms/banner-marca-calvin-klein-kanui.jpg'
            ]
        ]);
    }
}
