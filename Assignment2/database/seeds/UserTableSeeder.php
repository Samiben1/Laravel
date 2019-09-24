<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * role:1(customer)
     * role:2(restaurant)
     * 
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' =>'user1@gmail.com',
            'address' => '25 jump street, NW',
            'role' => 'Customer',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' =>'user2@gmail.com',
            'address' => '25 jump street, NW',
            'role' => 'Customer',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' =>'user3@gmail.com',
            'address' => '25 jump street, NW',
            'role' => 'Customer',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Hungry Jacks',
            'email' =>'hungryjacks@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Burger urge',
            'email' =>'burg@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Sizzler',
            'email' =>'sizzler@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Mcdonalds',
            'email' =>'mcdonalds@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Hogs Breadth',
            'email' =>'hogs@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'GUZMAN Y GOMEZ',
            'email' =>'gyg@gmail.com',
            'address' => '57 Mainly street',
            'role' => 'Restaurant',
            'password' => bcrypt('123456')
        ]);
    }
}
