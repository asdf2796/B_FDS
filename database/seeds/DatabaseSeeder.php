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
    	// DB::table('products')->insert([
    	// 		'name' => str_random(10),
    	// 		'type' => str_random(10),
    	// 		'qty'	=> random_int(1, 50),
    	// 		'price'	=>	random_int(15, 100),
    	// 	]);

    	factory(App\Product::class, 20)->create();
    }
}
