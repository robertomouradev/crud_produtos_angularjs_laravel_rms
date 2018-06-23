<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*
        DB::table('products')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'password' => bcrypt('secret'),
            'sale_price' => 55,
            'price' => 80,
            'active' => 'yes',
            'imagem' => str_random(10).'.jpg',
        ]);
        */
    }
}
