@extends('layouts.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')
    <div class="container">
        <h1>Termékek</h1>
        @foreach ($products as $product)
        <div class="product">
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
            <div class="product-info">
                <div class="product-name">{{ $product->name }}</div>
                <div class="product-description">{{ $product->description }}</div>
                <div class="product-price">{{ number_format($product->price, 2) }} Ft</div>
            </div>
        </div>
        @endforeach
    </div>
@endsection