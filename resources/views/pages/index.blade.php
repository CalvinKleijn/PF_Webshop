@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif   
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron_color">
                @guest
                    <h1 class="display-4">Welkom bij Brandclothes</h1>
                @else
                    <h1 class="display-4">Welkom {{Auth::user()->name}}</h1>
                    <a class="btn btn-style mb-1" href="{{ route('getOrders') }}" role="button"><i class="fas fa-arrow-right"></i> Bestellingen</a>
                @endguest

                <br>

                <a class="btn btn-style" href="{{ route('getProducts') }}" role="button"><i class="fas fa-arrow-right"></i> Ga naar ons assortiment</a>
            </div>
        </div> 
    </div>        
</div>
@endsection

