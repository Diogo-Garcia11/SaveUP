<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function produtos()
    {
        $produtos_recentes = Produto::latest()
            ->take(8)
            ->get();

        $produtos_surpresa = Produto::inRandomOrder()
            ->take(8)
            ->get();

        $produtos_camisetas = Produto::where('nomeProduto', 'like', '%Camiseta%')
            ->latest()
            ->take(8)
            ->get();

        $produtos_calcas = Produto::where('nomeProduto', 'like', '%Calça%')
            ->latest()
            ->take(8)
            ->get();
        return view('dashboard', compact(
            'produtos_recentes',
            'produtos_surpresa',
            'produtos_camisetas',
            'produtos_calcas'
        ));
    }

    public function buscar(Request $request)
    {
    $busca = $request->busca;

    $produtos = Produto::where('nomeProduto', 'like', '%' . $busca . '%')
        ->latest()
        ->take(8)
        ->get();

    return view('buscar', compact('produtos', 'busca'));
    }

    public function detalhar($id)
    {
        $produto = Produto::findOrFail($id);

        return view('detalhar', compact('produto'));
    }
}
