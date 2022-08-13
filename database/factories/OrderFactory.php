<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'package_id' => $this->faker->numberBetween(1,4),
            'user_id' => $this->faker->numberBetween(1,8),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }

}
