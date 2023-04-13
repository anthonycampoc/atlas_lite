<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'ruc'=> $this->faker->numberBetween(1,1000000000),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
