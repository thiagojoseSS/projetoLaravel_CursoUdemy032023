<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produto>
 */
class produtoFactory extends Factory
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
            'descricao' => fake()->paragraph(1),
            'valor' => fake()->randomFloat(2, 10, 10000),
            'estoque' => fake()->randomFloat(3, 1, 500)
        ];
    }
}
