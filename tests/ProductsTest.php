<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Homeful\Products\Models\Product;

uses(RefreshDatabase::class, WithFaker::class);

it('has attributes', function () {
    $product = Product::factory()->create();
    if ($product instanceof Product) {
        expect($product->sku)->toBeString();
        expect($product->name)->toBeString();
        expect($product->brand)->toBeString();
        expect($product->category)->toBeString();
        expect($product->description)->toBeString();
    }
});
