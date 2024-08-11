<?php

namespace Homeful\Products\Database\Factories;

use Homeful\Products\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
