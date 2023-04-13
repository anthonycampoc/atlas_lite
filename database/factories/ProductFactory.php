<?php

namespace Database\Factories;

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

     public function rconde(){
        $rand = 0;
        $code = 0;
      
        $rand = mt_rand(0,10);
        $code = $rand.time();

        return $code;
     }
    public function definition()
    {
        return [
            'code'=> $this->faker->numberBetween(1,100000),
        'name'=> $this->faker->name(),
        'stock'=> $this->faker->numberBetween(1,50),
        'image' => $this->faker->name().'jpg',
        'sell_price' => $this->faker->randomFloat(2, 1, 100),
        'categoria_id' => $this ->faker->numberBetween(1, 50),
        'provider_id' => $this ->faker->numberBetween(1, 50),
        ];
    }
}
