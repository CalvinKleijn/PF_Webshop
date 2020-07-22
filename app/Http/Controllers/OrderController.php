<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Order;
use App\OrderProduct;
use App\Helpers\Cart;

class OrderController extends Controller
{
    public function getOrders(){
        $orders = Auth::user()->orders;
        return view('orders.index', ['orders' => $orders]);
    }

    public function saveOrder(Request $request){
        $order = new Order();

        $order->name = Auth::user()->name;
        $order->user_id = Auth::user()->id;

        $cart = new Cart();

        $order->totalprice = $cart->totalPrice;

        $order->save();

        foreach($cart->items as $item) {
            $orderarticle = new OrderProduct();

            $orderarticle->order_id = $order->id;
            $orderarticle->product_id = $item['item']['id'];
            $orderarticle->quantity = $item['count'];

            $orderarticle->save();
        }

        Session::forget('cart');

        return redirect()->route('getIndex')->with('status', 'Bestelling is geplaatst!');
    }
}
