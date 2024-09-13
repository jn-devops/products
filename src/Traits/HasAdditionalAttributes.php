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

    // New constants for additional property fields
    const PROJECT_LOCATION_FIELD = 'project_location';
    const PROJECT_CODE_FIELD = 'project_code';
    const PROPERTY_NAME_FIELD = 'property_name';
    const PHASE_FIELD = 'phase';
    const BLOCK_FIELD = 'block';
    const LOT_FIELD = 'lot';
    const LOT_AREA_FIELD = 'lot_area';
    const FLOOR_AREA_FIELD = 'floor_area';
    const PROJECT_ADDRESS_FIELD = 'project_address';
    const PROPERTY_TYPE_FIELD = 'property_type';
    const UNIT_TYPE_FIELD = 'unit_type';

    public function initializeHasAdditionalAttributes(): void
    {
        $this->mergeFillable([
            'market_segment',
            'location',
            'destinations',
            'project_location',
            'project_code',
            'property_name',
            'phase',
            'block',
            'lot',
            'lot_area',
            'floor_area',
            'project_address',
            'property_type',
            'unit_type',
        ]);
    }

    // Setters and Getters for each field

    public function setMarketSegmentAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::MARKET_SEGMENT_FIELD, $value);
        return $this;
    }

    public function getMarketSegmentAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::MARKET_SEGMENT_FIELD) ?? null;
    }

    public function setLocationAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::LOCATION_FIELD, $value);
        return $this;
    }

    public function getLocationAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::LOCATION_FIELD) ?? null;
    }

    public function setDestinationsAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::DESTINATIONS_FIELD, $value);
        return $this;
    }

    public function getDestinationsAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::DESTINATIONS_FIELD) ?? null;
    }

    public function setDirectionsAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::DIRECTIONS_FIELD, $value);
        return $this;
    }

    public function getDirectionsAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::DIRECTIONS_FIELD) ?? null;
    }

    public function setAmenitiesAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::AMENITIES_FIELD, $value);
        return $this;
    }

    public function getAmenitiesAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::AMENITIES_FIELD) ?? null;
    }

    public function setFacadeUrlAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::FACADE_URL_FIELD, $value);
        return $this;
    }

    public function getFacadeUrlAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::FACADE_URL_FIELD) ?? null;
    }

    // Methods for additional fields

    public function setProjectLocationAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PROJECT_LOCATION_FIELD, $value);
        return $this;
    }

    public function getProjectLocationAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PROJECT_LOCATION_FIELD) ?? null;
    }

    public function setProjectCodeAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PROJECT_CODE_FIELD, $value);
        return $this;
    }

    public function getProjectCodeAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PROJECT_CODE_FIELD) ?? null;
    }

    public function setPropertyNameAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PROPERTY_NAME_FIELD, $value);
        return $this;
    }

    public function getPropertyNameAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PROPERTY_NAME_FIELD) ?? null;
    }

    public function setPhaseAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PHASE_FIELD, $value);
        return $this;
    }

    public function getPhaseAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PHASE_FIELD) ?? null;
    }

    public function setBlockAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::BLOCK_FIELD, $value);
        return $this;
    }

    public function getBlockAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::BLOCK_FIELD) ?? null;
    }

    public function setLotAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::LOT_FIELD, $value);
        return $this;
    }

    public function getLotAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::LOT_FIELD) ?? null;
    }

    public function setLotAreaAttribute(float $value): self
    {
        $this->getAttribute('meta')->set(Product::LOT_AREA_FIELD, $value);
        return $this;
    }

    public function getLotAreaAttribute(): ?float
    {
        return $this->getAttribute('meta')->get(Product::LOT_AREA_FIELD) ?? null;
    }

    public function setFloorAreaAttribute(float $value): self
    {
        $this->getAttribute('meta')->set(Product::FLOOR_AREA_FIELD, $value);
        return $this;
    }

    public function getFloorAreaAttribute(): ?float
    {
        return $this->getAttribute('meta')->get(Product::FLOOR_AREA_FIELD) ?? null;
    }

    public function setProjectAddressAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PROJECT_ADDRESS_FIELD, $value);
        return $this;
    }

    public function getProjectAddressAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PROJECT_ADDRESS_FIELD) ?? null;
    }

    public function setPropertyTypeAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::PROPERTY_TYPE_FIELD, $value);
        return $this;
    }

    public function getPropertyTypeAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::PROPERTY_TYPE_FIELD) ?? null;
    }

    public function setUnitTypeAttribute(string $value): self
    {
        $this->getAttribute('meta')->set(Product::UNIT_TYPE_FIELD, $value);
        return $this;
    }

    public function getUnitTypeAttribute(): ?string
    {
        return $this->getAttribute('meta')->get(Product::UNIT_TYPE_FIELD) ?? null;
    }
}
