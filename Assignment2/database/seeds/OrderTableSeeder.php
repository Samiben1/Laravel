<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'userid' => '1',
            'username' => 'user1',
            'item_name' => 'Vegan Cheese Burger',
            'price' => '7.50',
            'quantity' => '4',
            'Restaurant_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('orders')->insert([
            'userid' => '2',
            'username' => 'user2',
            'item_name' => 'Ceaser Wrap',
            'price' => '7.50',
            'quantity' => '4',
            'Restaurant_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('orders')->insert([
            'userid' => '2',
            'username' => 'user2',
            'item_name' => 'Vegan Cheese Burger',
            'price' => '7.50',
            'quantity' => '4',
            'Restaurant_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
