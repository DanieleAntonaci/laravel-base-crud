<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Santo>
 */
class SantoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => fake() -> firstName(),
                'last_name' => fake() -> lastName(),
                'place_of_birth' => fake() -> city(),
                'date_of_blessing' => fake() -> date('Y_m_d'),
                'num_miracle' => fake() -> numberBetween(1, 99),
            ];
    }
}
