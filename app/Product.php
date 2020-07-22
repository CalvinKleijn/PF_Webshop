<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
    	return $this->belongsToMany('App\Category', 'category_product');
    }

    public function orders(){
    	return $this->belongsToMany('App\Order', 'order_products');
    }
}
