<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class usuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake('pt_BR')->name(),
            'email' => fake('pt_BR')->email(),
            'senha' => fake('pt_BR')->numberBetween(1, 4),
            'nivel' => fake('pt_BR')->realTextBetween('user', 'admin')
        ];
    }
}
