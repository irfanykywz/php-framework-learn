@props([
    'product',
])

<div class="card">

    <div class="card-image">
        <img src="{{ $product['image'] }}" width="300" height="220" alt="product 1">
        <span class="card-badge">
            {{ $product['rating'] }}
            <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
        </span>
    </div>
    <div class="card-description">
        <h4>{{ $product['name'] }}</h4>
        <span>{{ $product['price'] }}</span>
    </div>
    <div class="card-actions">
        <p>{{ $product['description'] }}</p>
        <button type="button">
            <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
        </button>
    </div>
</div>
