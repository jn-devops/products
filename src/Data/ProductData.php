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
        // Additional fields
        public string $project_location,
        public string $project_code,
        public string $property_name,
        public string $phase,
        public string $block,
        public string $lot,
        public ?float $lot_area,
        public ?float $floor_area,
        public string $project_address,
        public string $property_type,
        public string $unit_type,
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
            facade_url: $product->facade_url,
            // Additional fields
            project_location: $product->project_location,
            project_code: $product->project_code,
            property_name: $product->property_name,
            phase: $product->phase,
            block: $product->block,
            lot: $product->lot,
            lot_area: $product->lot_area,
            floor_area: $product->floor_area,
            project_address: $product->project_address,
            property_type: $product->property_type,
            unit_type: $product->unit_type
        );
    }
}
