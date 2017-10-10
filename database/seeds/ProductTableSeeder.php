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
        				'prod_name' => 'Nestle Fresh Milk',
    					'prod_desc' => '1 L',
    					'unit_price' => 83.50,
    					'reorder_qty' => 4,
    					'status' => 'active']);

        Product::create(['pc_id' => 1,
        				'prod_name' => 'Summit Mineral Water',
    					'prod_desc' => '1 L',
    					'unit_price' => 21.50,
    					'reorder_qty' => 8,
    					'status' => 'active']);

        Product::create(['pc_id' => 4,
        				'prod_name' => 'Magnolia Chicken Drumstick',
    					'prod_desc' => '1 kg',
    					'unit_price' => 152.00,
    					'reorder_qty' => 5,
    					'status' => 'active']);

        Product::create(['pc_id' => 7,
                        'prod_name' => 'Del Monte Elbow Macaroni Pasta',
                        'prod_desc' => '1 kg',
                        'unit_price' => 93.50,
                        'reorder_qty' => 3,
                        'status' => 'active']);

        Product::create(['pc_id' => 4,
                        'prod_name' => 'Spam Garlic Luncheon Meat',
                        'prod_desc' => '12 oz',
                        'unit_price' => 135,
                        'reorder_qty' => 7,
                        'status' => 'active']);
    }
}
