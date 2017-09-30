<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['pc_id' => 2,
        				'prod_name' => 'Nestle Fresh Milk'
    					'prod_desc' => '',
    					'unit_price' => 83.50,
    					'reorder_qty' => ,
    					'status' => 'active']);

        Product::create(['pc_id' => 1,
        				'prod_name' => 'Summit Mineral Water'
    					'prod_desc' => '',
    					'unit_price' => 21.50,
    					'reorder_qty' => ,
    					'status' => 'active']);

        Product::create(['pc_id' => 4,
        				'prod_name' => 'Magnolia Chicken Drumstick'
    					'prod_desc' => '',
    					'unit_price' => 21.50,
    					'reorder_qty' => ,
    					'status' => 'active']);

        Product::create(['pc_id' => 7,
                        'prod_name' => 'Del Monte Elbow Macaroni Pasta'
                        'prod_desc' => '',
                        'unit_price' => 93.50,
                        'reorder_qty' => ,
                        'status' => 'active']);

        Product::create(['pc_id' => 4,
                        'prod_name' => 'Spam Garlic Luncheon Meat'
                        'prod_desc' => '',
                        'unit_price' => 135,
                        'reorder_qty' => ,
                        'status' => 'active']);
    }
}
