<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doner_name' => $this->faker->name() ,
            'category_id' => $this->faker->numberBetween(1,4),
            'condition' => $this->faker->numberBetween(1,4),
            'products_number' =>$this->faker->numberBetween(1,10) ,
            'title' => $this->faker->text(90),
            'phone_number' => $this->faker->phoneNumber(),
            'city_id' => $this->faker->numberBetween(1,4),
            'image' => $this->faker->imageUrl(400, 300),
            'description' =>$this->faker->text() ,
        ];
    }


}
