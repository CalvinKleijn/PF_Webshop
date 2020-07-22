<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cart;
use Session;
use App\Product;

class CartController extends Controller
{
    public function getCart() {
        $cart = new Cart();
        return view('cart.index', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function addToCart($id) {
        $cart = new Cart();

        $product = Product::find($id);
        $cart->addProduct($product, $product->id);
        
        return redirect()->route('getProducts')->with('status', 'Product toegevoegd aan de winkelmand!');
    }

    public function increaseCart($id) {
        $cart = new Cart();

        $product = Product::find($id);
        $cart->increaseCart($product, $product->id);
        
        return redirect()->route('getCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function decreaseCart($id) {
        $cart = new Cart();

        $product = Product::find($id);
        $cart->decreaseCart($product, $product->id);
        
        return redirect()->route('getCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function removeProduct($id) {
        $cart = new Cart();

        $cart->removeProduct($id);
        
        return redirect()->route('getCart');
    }

    public function getCheckout() {
        $cart = new Cart();
        return view('cart.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}