<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Produtos de Futebol
        Product::create(['nome' => 'Chuteira Super Pro', 'esporte' => 'futebol', 'preco' => 'R$ 799,99']);
        Product::create(['nome' => 'Camisa Oficial Brasil', 'esporte' => 'futebol', 'preco' => 'R$ 349,99']);

        // Produtos de Basquete
        Product::create(['nome' => 'Tênis High-Flyer', 'esporte' => 'basquete', 'preco' => 'R$ 1.199,99']);
        Product::create(['nome' => 'Bola de Basquete Oficial', 'esporte' => 'basquete', 'preco' => 'R$ 299,99']);
    }
}
