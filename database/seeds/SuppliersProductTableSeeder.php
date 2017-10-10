<?php

use Illuminate\Database\Seeder;
use App\SuppliersProduct;
class SuppliersProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuppliersProduct::create(['supp_id' => 1,
        					      'prod_id' => 1,
        					      'status' => 'active']);
        SuppliersProduct::create(['supp_id' => 2,
                                  'prod_id' => 3,
                                  'status' => 'active']);
        SuppliersProduct::create(['supp_id' => 3,
                                  'prod_id' => 2,
                                  'status' => 'active']);
        SuppliersProduct::create(['supp_id' => 4,
                                  'prod_id' => 4,
                                  'status' => 'active']);
        SuppliersProduct::create(['supp_id' => 5,
                                  'prod_id' => 5,
                                  'status' => 'active']);
    }
}
