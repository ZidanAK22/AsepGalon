<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'AQUA',
                'price' => 5000,
                'description' => 'lorem ipsum',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tokopedia.com%2Fsumberbaru-toko%2Faqua-19-liter-air-mineral-kemasan-galon-isi%3Futm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_campaign%3Dpdp-seo&psig=AOvVaw3gFfUQQa8vl-zw_7h_kU9p&ust=1685004481323000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCPjKtYHJjf8CFQAAAAAdAAAAABAD'
            ],
            [
                'name' => 'Amidis',
                'price' => 5000,
                'description' => 'lorem ipsum',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FAMIDIS-Galon-19L-Air-Minum-Distilasi-i.205438649.4109752504&psig=AOvVaw2_1QfiEPu8u-5riTA797rA&ust=1685004598424000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCKCq1rnJjf8CFQAAAAAdAAAAABAD'
            ],
            [
                'name' => 'Le Minerale',
                'price' => 7000,
                'description' => 'lorem ipsum',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Falfagift.id%2Fp%2Fle-minerale-air-mineral-galon-5-l-783525&psig=AOvVaw1ABvTEYAWsGcN2vZpUwBQs&ust=1685004677663000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCNCO1uTJjf8CFQAAAAAdAAAAABAD'
            ],
            [
                'name' => 'Vit',
                'price' => 4000,
                'description' => 'lorem ipsum',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tokopedia.com%2Fpacharelleshop%2Fgalon-air-mineral-vit-surabaya%3Futm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_campaign%3Dpdp-seo&psig=AOvVaw2MDlgtiCUb-5yZek6XHJ7W&ust=1685004718190000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCNCFsvHJjf8CFQAAAAAdAAAAABAD'
            ]
        ];
        Product::insert($products);
    }
}
