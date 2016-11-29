<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        DB::table('product')->insert([
                'product_id' => $index,
	            'product_name' => $faker->word,
                'created_at' => date("Y-m-d H:i:s"),
	        ]);
        }
    }
}
