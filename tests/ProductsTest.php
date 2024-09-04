<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Homeful\Products\Data\ProductData;
use Homeful\Products\Models\Product;
use Whitecube\Price\Price;

uses(RefreshDatabase::class, WithFaker::class);

it('has attributes', function () {
    $product = Product::factory()->create();
    if ($product instanceof Product) {
        expect($product->sku)->toBeString();
        expect($product->name)->toBeString();
        expect($product->brand)->toBeString();
        expect($product->category)->toBeString();
        expect($product->description)->toBeString();
        expect($product->price)->toBeInstanceOf(Price::class);
        expect($product->market_segment)->toBeString();
        expect($product->location)->toBeString();
        expect($product->destinations)->toBeString();
        expect($product->directions)->toBeString();
        expect($product->amenities)->toBeString();
    }
});

it('has data', function () {
    $product = Product::factory()->create();
    with(ProductData::fromModel($product), function (ProductData $data) use ($product) {
        if ($product instanceof Product) {
            expect($data->sku)->toBe($product->sku);
            expect($data->name)->toBe($product->name);
            expect($data->brand)->toBe($product->brand);
            expect($data->category)->toBe($product->category);
            expect($data->description)->toBe($product->description);
            expect($data->price)->toBe($product->price->inclusive()->getAmount()->toFloat());
            expect($data->market_segment)->toBe($product->market_segment);
            expect($data->location)->toBe($product->location);
            expect($data->destinations)->toBe($product->destinations);
            expect($data->directions)->toBe($product->directions);
            expect($data->amenities)->toBe($product->amenities);
        }
    });
});
