<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $table = 'product_category';
    protected $fillable = ['category_name', 'status'];

    public function products()
    {
    	return $this->hasMany('App\Product','pc_id','id');
    }
}
