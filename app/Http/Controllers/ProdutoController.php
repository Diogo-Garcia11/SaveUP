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
            'produtos_camisetas',
            'produtos_calcas'
        ));
    }
    
}
