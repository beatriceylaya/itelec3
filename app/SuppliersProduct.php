<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuppliersProduct extends Model
{
	protected $table = 'suppliers_product';
    protected $fillable = ['supp_id', 'prod_id', 'status'];
}
