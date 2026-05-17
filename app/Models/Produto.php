<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
     protected $table = 'produto';

    // Se a chave primária não for 'id', defina-a aqui
    protected $primaryKey = 'idProduto';

    // Define se a chave primária é auto-incrementada
    public $incrementing = true;

    // Define o tipo de dado da chave primária
    protected $keyType = 'int';

    protected $fillable = [
        'nomeProduto',
        'descricaoProduto',
        'precoProduto',
        'link1Produto',
        'link2Produto',
    ];

    protected $hidden = [
        // Adicione atributos aqui se necessário
    ];

    // Define os atributos que devem ser casted para tipos específicos
    protected $casts = [
        // Adicione os casts aqui se necessário
    ];
}
