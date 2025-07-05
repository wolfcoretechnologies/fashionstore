<?php

use Illuminate\Support\Facades\Route;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Shop\Http\Middleware\Theme;


Route::middleware(['web', 'theme'])->group(function () {
    Route::get('/products', function () {
        $productRepository = app(ProductRepository::class);

        $products = $productRepository->getAll()
            ->where('visible_individually', 1)
            ->where('status', 1)
            ->take(20); // Limit to 20 or paginate

        return view('shop::products.custom-list', compact('products'));
    });
});
