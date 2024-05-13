<!-- Products -->
<section class="products">
    <div class="container">
        <h1 class="section-title">Special menu <span class="primary-b-line">for you</span></h1>
        <div class="wrapper-card">


            @foreach($products as $product)

                <x-card :product="$product"/>

            @endforeach

{{--            <div class="card">--}}
{{--                <div class="card-image">--}}
{{--                    <img src="./assets/images/product-list-1.png" width="300" height="220" alt="product 2">--}}
{{--                    <span class="card-badge">--}}
{{--                                4.8--}}
{{--                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--                <div class="card-description">--}}
{{--                    <h4>Ekspresso</h4>--}}
{{--                    <span>14K</span>--}}
{{--                </div>--}}
{{--                <div class="card-actions">--}}
{{--                    <p>Hot Milk with less sugar</p>--}}
{{--                    <button type="button">--}}
{{--                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-image">--}}
{{--                    <img src="./assets/images/product-list-2.png" width="300" height="220" alt="product 3">--}}
{{--                    <span class="card-badge">--}}
{{--                                4.8--}}
{{--                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--                <div class="card-description">--}}
{{--                    <h4>Hazelnut Latte</h4>--}}
{{--                    <span>21K</span>--}}
{{--                </div>--}}
{{--                <div class="card-actions">--}}
{{--                    <p>Coffe with ice cream vanilla</p>--}}
{{--                    <button type="button">--}}
{{--                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-image">--}}
{{--                    <img src="./assets/images/product-list-3.png" width="300" height="220" alt="product 3">--}}
{{--                    <span class="card-badge">--}}
{{--                                4.8--}}
{{--                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--                <div class="card-description">--}}
{{--                    <h4>Cappucino</h4>--}}
{{--                    <span>12K</span>--}}
{{--                </div>--}}
{{--                <div class="card-actions">--}}
{{--                    <p>Hot Cappucino</p>--}}
{{--                    <button type="button">--}}
{{--                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-image">--}}
{{--                    <img src="./assets/images/product-list-4.png" width="300" height="220" alt="product 3">--}}
{{--                    <span class="card-badge">--}}
{{--                                4.8--}}
{{--                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--                <div class="card-description">--}}
{{--                    <h4>Moccacinno</h4>--}}
{{--                    <span>12K</span>--}}
{{--                </div>--}}
{{--                <div class="card-actions">--}}
{{--                    <p>Coffe with ice cream vanilla</p>--}}
{{--                    <button type="button">--}}
{{--                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-image">--}}
{{--                    <img src="./assets/images/product-list-5.png" width="300" height="220" alt="product 3">--}}
{{--                    <span class="card-badge">--}}
{{--                                4.8--}}
{{--                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--                <div class="card-description">--}}
{{--                    <h4>Hot Moccacino </h4>--}}
{{--                    <span>21K</span>--}}
{{--                </div>--}}
{{--                <div class="card-actions">--}}
{{--                    <p>Wafle with Ice cream</p>--}}
{{--                    <button type="button">--}}
{{--                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

