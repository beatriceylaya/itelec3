<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['supplier_name', 'supplier_email', 
    						'contact_person', 'address', 'status'];
}
