<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'pro_pic' => 'hungryjacks.png',
            'name' => 'Hungry Jacks',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'pro_pic' => 'burge.png',
            'name' => 'Burger urge',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'pro_pic' => 'sizzler.png',
            'name' => 'Sizzler',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'pro_pic' => 'mcdonalds.jpg',
            'name' => 'Mcdonalds',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'pro_pic' => 'hogs.png',
            'name' => 'Hogs Breadth',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'pro_pic' => 'gyg.jpg',
            'name' => 'GUZMAN Y GOMEZ',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
