<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pc_id', 'prod_name', 'prod_desc', 
    						'unit_price', 'reorder_qty', 'status'];
}
