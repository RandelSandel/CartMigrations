<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

    	'cart_id',
    	'product_name',
    	'product_description',
    	'active',

    ];
}
