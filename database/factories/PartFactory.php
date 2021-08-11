<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Category;
use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'user_id'     => 1,
            'car_id'      => Car::all()->random()->id,
            'title'       => $this->faker->text(15),
            'description' => $this->faker->text(100),
            'price'       => random_int(1, 9999),
        ];
    }
}
