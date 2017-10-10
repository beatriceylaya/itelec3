<?php

use Illuminate\Database\Seeder;
use App\Supplier;
class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create(['supplier_name' => 'Nestlé Philippines', 
        				'supplier_email' => 'nestle@support.com',
        				'contact_person' => 'Cedrik Beltran',
        				'address' => 'Naga, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Magnolia Philippines', 
        				'supplier_email' => 'magnoliaph@gmail.com',
        				'contact_person' => 'Issa Fernandez',
        				'address' => 'Talamban, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Summit Water', 
        				'supplier_email' => 'summitwater@support.com',
        				'contact_person' => 'Meredith Grey',
        				'address' => 'Mandaue, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Del Monte Foods, Inc', 
        				'supplier_email' => 'delmonte@support.com',
        				'contact_person' => 'Arizona Robbins',
        				'address' => 'Consolacion, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Hormel Foods Corporation', 
                        'supplier_email' => 'hormelcorp@support.com',
                        'contact_person' => 'April Kepner',
                        'address' => 'Talisay, Cebu City',
                        'status' => 'active']);
    }
}
