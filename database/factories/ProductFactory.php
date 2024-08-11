<?php

namespace Homeful\Products\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Homeful\Products\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'sku' => $this->faker->word(),
            'name' => $this->faker->word(),
            'brand' => $this->faker->word(),
            'category' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
