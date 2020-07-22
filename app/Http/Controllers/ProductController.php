<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
    public function getProducts(){
    	$products = Product::all();
    	return view('products.index', ['products' => $products]);
    }

    public function getProduct($id){
    	$product = Product::where('id', '=', $id)->first();
    	return view('products.template', ['product' => $product]);
    }
}

