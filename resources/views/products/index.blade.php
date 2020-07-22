@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif   
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <img class="mx-auto d-block mb-2" src="{{ $product->product_image_front }}" width="50%" height="220px">
                        @forelse($product->categories as $category)
                            <p class="btn btn-sm d-inline btn_category">{{ $category->category_title }}</p>
                        @empty
                        @endforelse
                        <p class="product_title mt-2">{{ $product->product_title }}</p>
                        <p class="product_description">{{ $product->product_description }}</p>
                        <p class="product_price">{{ $product->product_price }},-</p>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('addProductToCart', ['id' => $product->id]) }}" class="btn btn-style btn-sm btn-block"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('getProduct', ['id' => $product->id]) }}" class="btn btn-style btn-sm btn-block"><i class="far fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection