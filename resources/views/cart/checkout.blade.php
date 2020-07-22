@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Betalen</h3>
        </div>    
    </div>    
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('saveOrder') }}" method="POST">

                @csrf

                <label>Product(en)</label>
                <ul class="mb-5">
                    @foreach($products as $product)
                            <li>{{ $product['count'] }}x {{ $product['item']['product_title'] }}</li>
                            <small>Kleur - {{ $product['item']['product_color'] }}</small><br>
                            <small>Maat - {{ $product['item']['product_size'] }}</small><br><br>
                    @endforeach
                </ul>

                <button class="btn btn-style" type="submit">Betaal nu {{ $totalPrice }},-</button>  

            </form>

        </div>  
    </div>    
</div>
@endsection