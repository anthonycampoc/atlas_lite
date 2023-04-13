<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        
            'total' => $this->faker->randomFloat(2, 1, 100),
            'sale_date'=> $this->faker->dateTime(),
            'client_id' => $this ->faker->numberBetween(1, 10),
            'user_id'  => $this ->faker->numberBetween(1, 2),

            
        ];
    }
}
