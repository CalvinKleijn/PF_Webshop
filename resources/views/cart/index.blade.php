@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Winkelmand</h3>
        </div>  
    </div>    

    <br>

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-8">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['count'] }}</span>
                            <img src="{{ $product['item'][
                            'product_image_front'] }}" width="15%">
                            <strong>{{ $product['item']['product_title'] }}</strong>
                            <span class="label label-success ml-3">{{ $product['item']['product_price'] }},-</span>
                            <a href="{{ route('removeProduct', ['id' => $product['item']['id']]) }}" class="btn btn-style-dark btn-sm m-1" style="float: right"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('increaseCart', ['id' => $product['item']['id']]) }}" class="btn btn-style btn-sm m-1" style="float: right"><i class="fas fa-plus"></i></a>
                            <a href="{{ route('decreaseCart', ['id' => $product['item']['id']]) }}" class="btn btn-style btn-sm m-1" style="float: right"><i class="fas fa-minus"></i></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-8 mb-2">
                <strong>{{ $totalPrice }},-</strong>
            </div>
        </div>

        <div class="row">
            <div class="col-8 mt-5">
                @if (Auth::check())
                    <button class="btn btn-style"><a class="btn btn-style" href="{{ route('getCheckout') }}">Betalen</a></button>
                @else
                    <button class="btn btn-style"><a class="btn btn-style" href="{{ route('login') }}">Inloggen</a></button>
                    <small>Je moet ingelogd zijn om verder te kunnen gaan</small>
                @endif
            </div>    
        </div>
    @else
        <div class="row">
            <div class="col-8">
                <p>Geen producten in de winkelmand</p>
            </div>
        </div>
    @endif    
</div>
@endsection