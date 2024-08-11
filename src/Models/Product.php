<?php

namespace Homeful\Products\Models;

use Homeful\Common\Traits\HasMeta;
use Homeful\Common\Traits\HasPackageFactory as HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\SchemalessAttributes\SchemalessAttributes;

/**
 * Class Product
 *
 * @property int $id
 * @property string $sku
 * @property string $name
 * @property string $brand
 * @property string $category
 * @property string $description
 * @property SchemalessAttributes $meta
 *
 * @method int getKey()
 */
class Product extends Model
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
    ];
}
