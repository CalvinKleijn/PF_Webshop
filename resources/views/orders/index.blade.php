@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Bestellingen</h3>
        </div>    
    </div>    
    <div class="row">
        <div class="col-md-12">
            <ul class="mb-5">
                @foreach($orders as $order)
                        <li>Bestellingnummer 2020{{ $order->id }}</li>
                        @foreach($order->products as $product)
                            <small>{{ $product->product_title }} - {{ $product->product_color }} - {{ $product->product_size }}</small><br>
                        @endforeach
                        <br>
                @endforeach
            </ul>
        </div>  
    </div>    
</div>
@endsection