<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['supplier_name', 'supplier_email', 
    						'contact_person', 'address', 'status'];

	public function products()
	{
   		return $this->belongsToMany('App\Product','suppliers_product','supp_id','prod_id')->wherePivot('status','active')->withTimeStamps();
	}
}
