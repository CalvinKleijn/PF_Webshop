<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert([
            'category_id' => 3,
        	'product_id' => 1,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 1,
        	'product_id' => 1,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 4,
        	'product_id' => 2,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 1,
        	'product_id' => 2,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 4,
        	'product_id' => 3,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 2,
        	'product_id' => 4,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 4,
        	'product_id' => 4,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 5,
        	'product_id' => 5,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 1,
        	'product_id' => 6,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 6,
        	'product_id' => 6,
        ]);
    }
}
