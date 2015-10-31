<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Category;
use CodeDelivery\Models\Product;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::Class, 10)->create()->each(function($c){
        	for ($i=0; $i < 5; $i++) { 
        		$c->products()->save(factory(Product::class)->make());
        	}
        });
    }
}
