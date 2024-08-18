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
        public float $price
    ){}

    public static function fromModel(Product $product): ProductData
    {
        return new self(
            sku: $product->sku,
            name: $product->name,
            brand: $product->brand,
            category: $product->category,
            description: $product->description,
            price: $product->price->inclusive()->getAmount()->toFloat()
        );
    }
}
