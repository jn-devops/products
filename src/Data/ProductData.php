<?php

namespace Homeful\Products\Data;

use Homeful\Products\Models\Product;
use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
        public string $sku,
        public string $name,
        public string $brand,
        public string $category,
        public string $description,
        public float $price,
        public string $market_segment,
        public string $location,
        public string $destinations,
        public string $directions,
        public string $amenities,
        public string $facade_url,
    ) {}

    public static function fromModel(Product $product): ProductData
    {
        return new self(
            sku: $product->sku,
            name: $product->name,
            brand: $product->brand,
            category: $product->category,
            description: $product->description,
            price: $product->price->inclusive()->getAmount()->toFloat(),
            market_segment: $product->market_segment,
            location: $product->location,
            destinations: $product->destinations,
            directions: $product->directions,
            amenities: $product->amenities,
            facade_url: $product->facade_url
        );
    }
}
