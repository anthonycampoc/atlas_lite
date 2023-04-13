<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'total'=> $this->faker->randomFloat(2, 1, 100),
            'puchase_date'=> $this->faker->dateTime(),
            'provider_id'=> $this ->faker->numberBetween(1, 10),
            'user_id'=> $this ->faker->numberBetween(1, 2),
        ];
    }
}
