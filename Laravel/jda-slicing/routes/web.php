<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = [
        [
            'name' => 'Ekspresso',
            'price' => '12K',
            'rating' => '4.1',
            'image' => './assets/images/product-list-1.png',
            'description' => 'Hot Milk with less sugar'
        ],
        [
            'name' => 'Hazelnut Latte',
            'price' => '16K',
            'rating' => '4.2',
            'image' => './assets/images/product-list-1.png',
            'description' => 'Coffe with ice cream vanilla'
        ],
        [
            'name' => 'Cappucino',
            'price' => '22K',
            'rating' => '4.3',
            'image' => './assets/images/product-list-1.png',
            'description' => 'Wafle with Ice cream'
        ]
    ];

    return view('homepage', compact('products'));
});
