<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(10),
            'price'=>$this->faker->numberBetween(1,100),
            'term'=>$this->faker->date(now()),
            'description'=>$this->faker->text(100)
        ];
    }
}
