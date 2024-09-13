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
        expect($product->facade_url)->toBeString();

        // Additional fields
        expect($product->project_location)->toBeString();
        expect($product->project_code)->toBeString();
        expect($product->property_name)->toBeString();
        expect($product->phase)->toBeString();
        expect($product->block)->toBeString();
        expect($product->lot)->toBeString();
        expect($product->lot_area)->toBeFloat();
        expect($product->floor_area)->toBeFloat();
        expect($product->project_address)->toBeString();
        expect($product->property_type)->toBeString();
        expect($product->unit_type)->toBeString();
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
            expect($data->facade_url)->toBe($product->facade_url);

            // Additional fields
            expect($data->project_location)->toBe($product->project_location);
            expect($data->project_code)->toBe($product->project_code);
            expect($data->property_name)->toBe($product->property_name);
            expect($data->phase)->toBe($product->phase);
            expect($data->block)->toBe($product->block);
            expect($data->lot)->toBe($product->lot);
            expect($data->lot_area)->toBe($product->lot_area);
            expect($data->floor_area)->toBe($product->floor_area);
            expect($data->project_address)->toBe($product->project_address);
            expect($data->property_type)->toBe($product->property_type);
            expect($data->unit_type)->toBe($product->unit_type);
        }
    });
});
