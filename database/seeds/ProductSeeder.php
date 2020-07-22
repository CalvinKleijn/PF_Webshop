<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'product_title' => 'Off-White T-shirt',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/off-white-logo-workers-t-shirt-met-borduring-en-backprint/?reference=067/790/13_0677904001712002_pro_mod_frt_01_1108_1528_4669063.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/off-white-logo-workers-t-shirt-met-borduring-en-backprint/?reference=067/790/13_0677904001712002_pro_mod_bck_01_1108_1528_4669061.jpg',
            'product_brand' => 'Off-White',
            'product_description' => 'Logo Workers T-shirt met borduring en backprint',
            'product_color' => 'Zwart',
            'product_size' => 'L',
            'product_price' => 260,
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'product_title' => 'Stone Island T-shirt',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-24113-t-shirt-met-logopatch/?reference=082/560/13_0825604005372002_pro_mod_frt_01_1108_1528_4692566.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-24113-t-shirt-met-logopatch/?reference=082/560/13_0825604005372002_pro_mod_bck_01_1108_1528_4692564.jpg',
            'product_brand' => 'Stone Island',
            'product_description' => 'T-shirt met logopatch',
            'product_color' => 'Donkergroen',
            'product_size' => 'L',
            'product_price' => 109,
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'product_title' => 'Stone Island T-shirt',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-big-loom-camo-t-shirt-van-katoen-met-logoprint/?reference=082/560/13_0825603006112002_pro_mod_frt_01_1108_1528_4616571.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-big-loom-camo-t-shirt-van-katoen-met-logoprint/?reference=082/560/13_0825603006112002_pro_mod_bck_01_1108_1528_4616569.jpg',
            'product_brand' => 'Stone Island',
            'product_description' => 'Big Loom Camo T-shirt van katoen met logoprint',
            'product_color' => 'Zwart',
            'product_size' => 'L',
            'product_price' => 175,
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'product_title' => 'Stone Island Pullover',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-526c4-fijngebreide-pullover-van-wol/?reference=082/560/13_0825604001986002_pro_mod_frt_01_1108_1528_4693331.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/stone-island-526c4-fijngebreide-pullover-van-wol/?reference=082/560/13_0825604001986002_pro_mod_bck_01_1108_1528_4693329.jpg',
            'product_brand' => 'Stone Island',
            'product_description' => 'Fijngebreide pullover van wol',
            'product_color' => 'Donkerblauw',
            'product_size' => 'L',
            'product_price' => 255,
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'product_title' => 'Balenciaga Hoodie',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/balenciaga-political-campaign-oversized-hoodie-met-logoprint/?reference=057/590/13_0575904002112002_pro_mod_frt_01_1108_1528_4610261.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/balenciaga-political-campaign-oversized-hoodie-met-logoprint/?reference=057/590/13_0575904002112002_pro_mod_bck_01_1108_1528_4610259.jpg',
            'product_brand' => 'Balenciaga',
            'product_description' => 'Political Campaign oversized hoodie met logoprint',
            'product_color' => 'Zwart',
            'product_size' => 'L',
            'product_price' => 650,
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'product_title' => 'Burberry Hoodie',
            'product_image_front' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/burberry-swanley-hoodie-met-logoprint/?reference=081/670/13_0816703003412002_pro_mod_frt_01_1108_1528_4584398.jpg',
            'product_image_back' => 'https://cdn-1.debijenkorf.nl/web_detail_2x/burberry-swanley-hoodie-met-logoprint/?reference=081/670/13_0816703003412002_pro_mod_bck_01_1108_1528_4584396.jpg',
            'product_brand' => 'Burberry',
            'product_description' => 'Swanley hoodie met logoprint',
            'product_color' => 'Zwart',
            'product_size' => 'L',
            'product_price' => 650,
        ]);
    }    
}
