<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\RentedCar;
use App\Models\User;

class RentedCarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RentedCar::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_user' => $this->faker->randomNumber(),
            'id_car' => $this->faker->randomNumber(),
            'start_date' => $this->faker->date(),
            'return_date' => $this->faker->date(),
            'price_per_day' => $this->faker->word(),
            'car_id' => Car::factory(),
            'user_id' => User::factory(),
        ];
    }
}
