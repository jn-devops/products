<?php

namespace Homeful\Products\Traits;

use Homeful\Products\Models\Product;

trait HasAdditionalAttributes
{
    const MARKET_SEGMENT_FIELD = 'market_segment';
    const LOCATION_FIELD = 'location';
    const DESTINATIONS_FIELD = 'destinations';
    const DIRECTIONS_FIELD = 'directions';
    const AMENITIES_FIELD = 'amenities';
    const FACADE_URL_FIELD = 'facade_url';

    public function initializeHasAdditionalAttributes(): void
    {
        $this->mergeFillable(['market_segment', 'location', 'destinations']);
    }

    public function setMarketSegmentAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::MARKET_SEGMENT_FIELD, $value);

        return $this;
    }

    public function getMarketSegmentAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::MARKET_SEGMENT_FIELD) ?? $default;
    }

    public function setLocationAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::LOCATION_FIELD, $value);

        return $this;
    }

    public function getLocationAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::LOCATION_FIELD) ?? $default;
    }

    public function setDestinationsAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::DESTINATIONS_FIELD, $value);

        return $this;
    }

    public function getDestinationsAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::DESTINATIONS_FIELD) ?? $default;
    }

    public function setDirectionsAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::DIRECTIONS_FIELD, $value);

        return $this;
    }

    public function getDirectionsAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::DIRECTIONS_FIELD) ?? $default;
    }

    public function setAmenitiesAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::AMENITIES_FIELD, $value);

        return $this;
    }

    public function getAmenitiesAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::AMENITIES_FIELD) ?? $default;
    }

    public function setFacadeUrlAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::FACADE_URL_FIELD, $value);

        return $this;
    }

    public function getFacadeUrlAttribute(): ?string
    {
        $default = null;

        return $this->getAttribute('meta')->get(Product::FACADE_URL_FIELD) ?? $default;
    }
}
