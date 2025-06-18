<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function futebol()
    {
        // Dados de exemplo para as notícias
        $noticias = [
            ['titulo' => 'Flamengo vence clássico com gol no final', 'fonte' => 'ge.globo', 'link' => '#', 'imagem' => 'https://placehold.co/800x450/4299e1/ffffff?text=Noticia+1'],
            ['titulo' => 'Destaque da rodada, no streaming Disney Plus', 'fonte' => 'espn.com.br', 'link' => '#', 'imagem' => 'https://placehold.co/800x450/48bb78/ffffff?text=Noticia+2'],
            ['titulo' => 'Análise tática: Como o Flamengo dominou o meio-campo', 'fonte' => 'ge.globo', 'link' => '#', 'imagem' => 'https://placehold.co/800x450/f56565/ffffff?text=Noticia+3'],
        ];
        return view('site.futebol', compact('noticias'));
    }

    public function basquete()
    {

         // Dados para as notícias de basquete com imagens PNG
        $noticias = [
        [
            'titulo' => 'Jogo 2 emocionante, OKC EMPATA A SERIE',
            'fonte' => 'nba.com',
            'link' => 'https://www.nba.com/',
            'imagem' => asset('img/noticia-basquete-1.png') // Caminho para sua primeira imagem .png
         ],
         [
            'titulo' => 'Novo recorde de 3 pontos em uma partida',
            'fonte' => 'espn.com.br',
            'link' => 'https://www.nba.com/',
            'imagem' => asset('img/noticia-basquete-2.png') // Caminho para sua segunda imagem .png
        ],
        [
            'titulo' => 'MVP da temporada é consagrado pelo público',
            'fonte' => 'espn.com.br',
            'link' => 'https://www.nba.com/',
            'imagem' => asset('img/noticia-basquete-3.png') // Caminho para sua terceira imagem .png
        ],
        ];
        return view('site.basquete', compact('noticias'));
    }

    // --- MÉTODOS NOVOS ---
    // Carrega a view de produtos
    public function produtos($esporte)
    {
            // 1. Busca no banco de dados os produtos que correspondem ao esporte da URL
            $produtos = Product::where('esporte', $esporte)->get();

            // 2. Passa a variável $produtos e $esporte para a view
            return view('site.produtos', compact('produtos', 'esporte'));
    }

    // Carrega a view de contato
    public function contato($esporte)
    {
        return view('site.contato', compact('esporte'));
    }

}


