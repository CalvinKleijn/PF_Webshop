<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function getIndex(){
    	$products = Product::all();
    	return view('pages.index', ['products' => $products]);
    }
}
