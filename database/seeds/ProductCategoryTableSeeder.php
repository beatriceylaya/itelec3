<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;
class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create(['category_name' => 'Beverages',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Dairy',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Produce',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Meat',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Canned/Jarred Goods',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Bread/Bakery',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Dry/Baking Goods',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Paper Goods',
        						'status' => 'active']);

        ProductCategory::create(['category_name' => 'Personal Care',
        						'status' => 'active']);
    }
}
