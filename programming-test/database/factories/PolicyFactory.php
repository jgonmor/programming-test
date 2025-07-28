<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Policy>
 */
class PolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->randomNumber(5),
            'plan_reference' => $this->faker->unique()->randomNumber(5),
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'investment_house' => $this->faker->name(),
            'last_operation' => $this->faker->date(),
            'user_id' => null,
        ];
    }
}