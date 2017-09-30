<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuppliersProduct extends Model
{
    protected $fillable = ['supp_id', 'prod_id', 'status'];
}
