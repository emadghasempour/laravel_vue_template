<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->city(),
            'content' => $this->faker->text(maxNbChars: 30),
            'related_cards' => json_encode(['id' => 1]),
            'user_id' => User::all()->random(),
        ];
    }


}
