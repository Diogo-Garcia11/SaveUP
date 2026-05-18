<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        return [
            'nomeProduto' => fake()->name(),

            'descricaoProduto' => fake()->paragraph(),

            'precoProduto' => fake()->randomFloat(2, 20, 500),

            'link1Produto' => fake()->imageUrl(640, 480, 'products'),

            'link2Produto' => fake()->imageUrl(640, 480, 'products'),
        ];
    }
}