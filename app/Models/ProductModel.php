<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{

    protected $table = 'products';
    protected $primaryKey = 'batch';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'supplier', //5
        'name',  //2
        'value',  //4
        'quantity', //6
        'minimun_stock', //7
        'net_weight', //8 
        'profit', //9
        'category', //3
        'manufacturing_date', //10
        'expiration_date']; //11
    
    protected $validationRules = [
        'supplier' => 'required|string|min_length[3]',
        'name' => 'required|string|min_length[3]',
        'value' => 'required|decimal',
        'quantity' => 'required|integer',
        'minimun_stock' => 'required|integer',
        'net_weight' => 'required|decimal',
        'profit' => 'required|decimal',
        'category' => 'required|string|min_length[3]',
        'manufacturing_date' => 'required|valid_date[Y-m-d]',
        'expiration_date' => 'valid_date[Y-m-d]'
    ];

    protected $validationMessages = [
        'supplier' => [
            'required' => 'O fornecedor do produto é obrigatório!',
            'min_length[3]' => 'O nome do fornecedor é inválido!',
        ],
        'name' => [
            'required' => 'O nome do produto é obrigatório!',
            'min_length[3]' => 'O nome do produto é inválido!',
        ],
        'value' => [
            'required' => 'O valor do produto é obrigatório!',
            'granter_than[-1]' => 'O valor do produto é inválido!',
        ] ,
        'quantity' => [
            'required' => 'A quantidade do produto é obrigatória!',
            'granter_than_equal_to[0]' => 'A quantidade do produto inválida!',
        ],
        'minimum_stock' => [
            'required' => 'A quantidade de estoque mínimo é obrigatória!',
            'granter_than[0]' => 'A quantidade de estoque mínimo inválida!',
        ],
        'net_weight' => [
            'required' => 'O peso líquido do produto é obrigatório!',
            'granter_than[0]' => 'O peso líquido do produto é inválido!',
        ],
        'profit' => [
            'required' => 'O lucro sobre o produto é obrigatório!',
            'granter_than[0]' => 'O lucro sobre o produto é inválido!',            
        ],
        
        'category' => [
            'required' => 'A categoria é obrigatória!',
            'min_length[3]' => 'A categoria é inválida!',
        ]
    ];
}

?>