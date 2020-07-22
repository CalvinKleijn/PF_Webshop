@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="img_section float-left">
                        <img src="{{ $product->product_image_front }}" width="45%">
                        <img src="{{ $product->product_image_back }}" width="45%">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @forelse($product->categories as $category)
                        <p class="btn btn-sm d-inline btn_category">{{ $category->category_title }}</p>
                    @empty
                    @endforelse
                    <h2 class="product_title_header mt-3">{{ $product->product_title }}</h2>
                    <p class="product_description">{{ $product->product_description }}</p>
                    <p class="product_price_header">{{ $product->product_price }},-</p>

                    <hr class="mt-5 mb-5">

                    <p class="product_color"><b>Kleur</b> - {{ $product->product_color }}</p>

                    <hr class="mt-5 mb-5">

                    <p class="product_size"><b>Maat</b> - {{ $product->product_size }}</p>

                    <hr class="mt-5 mb-5">

                    <a href="{{ route('addProductToCart', ['id' => $product->id]) }}" class="btn btn-style">In winkelmand</a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection