<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Camiseta Básica Algodão',
                'preco' => 49.99,
                'imagem' => 'https://img.lojasrenner.com.br/item/542377734/original/3.jpg',
            ],

            [
                'nome' => 'Calça Jeans Skinny',
                'preco' => 129.90,
                'imagem' => 'https://img.lojasrenner.com.br/item/547702196/original/3.jpg',
            ],

            [
                'nome' => 'Vestido Floral Midi',
                'preco' => 89.99,
                'imagem' => 'https://img.lojasrenner.com.br/item/929764536/large/3.jpg',
            ],

            [
                'nome' => 'Blusa de Manga Longa',
                'preco' => 69.90,
                'imagem' => 'https://img.lojasrenner.com.br/item/930800531/large/3.jpg',
            ],

            [
                'nome' => 'Jaqueta Jeans',
                'preco' => 159.90,
                'imagem' => 'https://img.lojasrenner.com.br/item/928178113/large/3.jpg',
            ],

            [
                'nome' => 'Saia Plissada',
                'preco' => 79.99,
                'imagem' => 'https://imgmarketplace.lojasrenner.com.br/20001/1468/700964980/753031139/4.jpeg',

            ],

            [
                'nome' => 'Cardigan de Tricot',
                'preco' => 99.90,
                'imagem' => 'https://img.lojasrenner.com.br/item/880250314/original/12.jpg',
            ],

            [
                'nome' => 'Camisa Social Feminina',
                'preco' => 84.90,
                'imagem' => 'https://img.lojasrenner.com.br/item/929367389/large/3.jpg',
            ],
        ];

        foreach ($produtos as $produto) {

            Produto::create([
                'nomeProduto' => $produto['nome'],

                'descricaoProduto' => $produto['nome'],

                'precoProduto' => $produto['preco'],

                'link1Produto' => $produto['imagem'],

            ]);
        }
    }
}