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
        Supplier::create(['supplier_name' => 'Marcus Antonio', 
        				'supplier_email' => 'marcus@gmail.com',
        				'contact_person' => 'Cedrik Beltran',
        				'address' => 'Naga, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Maria Silencio', 
        				'supplier_email' => 'maria@gmail.com',
        				'contact_person' => 'Issa Fernandez',
        				'address' => 'Talamban, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Cristina Yang', 
        				'supplier_email' => 'cristina@gmail.com',
        				'contact_person' => 'Meredith Grey',
        				'address' => 'Mandaue, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Shonda Rhimes', 
        				'supplier_email' => 'shonda@gmail.com',
        				'contact_person' => 'Arizona Robbins',
        				'address' => 'Consolacion, Cebu City',
                        'status' => 'active']);

        Supplier::create(['supplier_name' => 'Jackson Avery', 
                        'supplier_email' => 'jackson@gmail.com',
                        'contact_person' => 'April Kepner',
                        'address' => 'Talisay, Cebu City',
                        'status' => 'active']);
    }
}
