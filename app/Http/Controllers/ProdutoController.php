<?php
namespace App\Http\Controllers;

class ProdutoController extends Controller
{
    public function getProdutosPorEsporte($esporte)
    {
        // Produtos de exemplo. O ideal é que venham do banco de dados!
        $todosOsProdutos = [
            ['id' => 1, 'esporte' => 'futebol', 'nome' => 'Chuteira Nike Phantom', 'preco' => 'R$ 799,90'],
            ['id' => 2, 'esporte' => 'futebol', 'nome' => 'Camisa Brasil 2024', 'preco' => 'R$ 349,90'],
            ['id' => 3, 'esporte' => 'basquete', 'nome' => 'Tênis Lebron James XX', 'preco' => 'R$ 1.299,90'],
            ['id' => 4, 'esporte' => 'basquete', 'nome' => 'Regata Lakers', 'preco' => 'R$ 499,90'],
        ];

        $produtosFiltrados = array_filter($todosOsProdutos, function ($produto) use ($esporte) {
            return $produto['esporte'] === $esporte;
        });

        return response()->json(array_values($produtosFiltrados));
    }
}
