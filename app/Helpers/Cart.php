<?php

namespace App\Helpers;

use Session;

class Cart
{
    public $items = null;
    public $totalCount = 0;
    public $totalPrice = 0;

    public function __construct()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if (Session::has('cart')) {
            $this->items = $oldCart->items;
            $this->totalCount = $oldCart->totalCount;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    
    public function addProduct($item, $id) {
        $storedItem = ['count' => 0, 'price' => $item->product_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['count']++;
        $storedItem['price'] = $item->product_price * $storedItem['count'];
        $this->items[$id] = $storedItem;
        $this->totalCount++;
        $this->totalPrice += $item->product_price;
        Session::put('cart', $this);
    }

    public function increaseCart($item, $id) {
        $storedItem = ['count' => 0, 'price' => $item->product_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['count']++;
        $storedItem['price'] = $item->product_price * $storedItem['count'];
        $this->items[$id] = $storedItem;
        $this->totalCount++;
        $this->totalPrice += $item->product_price;
        Session::put('cart', $this);
    }

    public function decreaseCart($item, $id) {
        $storedItem = ['count' => 0, 'price' => $item->product_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['count']--;
        $storedItem['price'] = $item->product_price * $storedItem['count'];
        $this->items[$id] = $storedItem;
        $this->totalCount--;
        $this->totalPrice -= $item->product_price;
        if ($this->totalCount == 0) {
            unset($this->items[$id]);
        }

        if ($this->totalPrice == 0) {
            Session::forget('cart');
        } else {
            Session::put('cart', $this);
        }
    }

    public function removeProduct($id) {
        $this->totalCount -= $this->items[$id]['count'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);

        if (count($this->items) > 0) {
            Session::put('cart', $this);
        } else {
            Session::forget('cart');
        }
    }
}