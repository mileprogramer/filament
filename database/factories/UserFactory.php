<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'personal_data' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'id_card' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
        ];
    }
}
