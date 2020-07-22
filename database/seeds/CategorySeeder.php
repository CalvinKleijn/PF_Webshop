<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'id' => 1,
        	'category_title' => 'New',
        ]);

        DB::table('categories')->insert([
        	'id' => 2,
        	'category_title' => 'Bestseller',
        ]);

        DB::table('categories')->insert([
        	'id' => 3,
        	'category_title' => 'Off-White',
        ]);

        DB::table('categories')->insert([
        	'id' => 4,
        	'category_title' => 'Stone Island',
        ]);

        DB::table('categories')->insert([
        	'id' => 5,
        	'category_title' => 'Balenciaga',
        ]);

        DB::table('categories')->insert([
        	'id' => 6,
        	'category_title' => 'Burberry',
        ]);

    }
}
