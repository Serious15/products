@extends('layouts.app')

@section('content')
<div class="product-detail">
    <div class="product-image">
        <img src="{{ asset('storage/img/fruits-img/' . $product->image) }}" alt="{{ $product->name }}">
    </div>

    <div class="product-info">
        <h1 class="product-name">{{ $product->name }}</h1>
        <p class="product-price">¥{{ number_format($product->price) }}</p>
        <p class="product-description">{{ $product->description }}</p>

        @if ($product->category)
        <p><strong>カテゴリー:</strong> {{ $product->category->name }}</p>
        @endif

        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary">カートに追加</button>
        </form>
    </div>
</div>

<div class="back-to-list">
    <a href="{{ route('product.index') }}" class="btn btn-secondary">商品一覧に戻る</a>
</div>
@endsection