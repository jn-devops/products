<?php

namespace Homeful\Products\Models;

use Brick\Money\Money;
use Homeful\Common\Casts\PriceCast;
use Homeful\Common\Interfaces\PropertyInterface;
use Homeful\Common\Traits\HasMeta;
use Homeful\Common\Traits\HasPackageFactory as HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Whitecube\Price\Price;

/**
 * Class Product
 *
 * @property int $id
 * @property string $sku
 * @property string $name
 * @property string $brand
 * @property string $category
 * @property string $description
 * @property Price $price
 * @property SchemalessAttributes $meta
 *
 * @method int getKey()
 */
class Product extends Model implements PropertyInterface
{
    use HasFactory;
    use HasMeta;

    protected $fillable = [
        'sku',
        'name',
        'brand',
        'category',
        'category',
        'description',
        'price',
    ];

    protected $casts = [
        'price' => PriceCast::class,
    ];

    public function getSKU(): string
    {
        return $this->sku;
    }

    public function getProcessingFee(): Price
    {
        return new Price(Money::of(10000, 'PHP'));
    }

    public function getTotalContractPrice(): Price
    {
        return $this->price;
    }

    public function getAppraisedValue(): Price
    {
        return $this->price; //TODO: improve this
    }
}
