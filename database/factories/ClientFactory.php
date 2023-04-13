<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identification' => $this->faker->numberBetween(1,1000000000),
            'name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'phone'=> $this->faker->phoneNumber(),
            'address'=> $this->faker->address(),
            'email'=> $this->faker->unique()->safeEmail(),
        ];
    }
}
