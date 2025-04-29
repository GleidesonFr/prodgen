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
        'supplier' => 'required|string',
        'name' => 'required|string',
        'value' => 'required|decimal|greater_than[0]',
        'quantity' => 'required|integer|greater_than[0]',
        'minimun_stock' => 'required|integer',
        'net_weight' => 'required|decimal|greater_than[0]',
        'profit' => 'required|decimal|greater_than[0]',
        'category' => 'required|string',
        'manufacturing_date' => 'required',
        'expiration_date' => 'required'
    ];

    protected $validationMessages = [
        'supplier' => [
            'required' => 'O fornecedor do produto é obrigatório!',
        ],
        'name' => [
            'required' => 'O nome do produto é obrigatório!',
        ],
        'value' => [
            'required' => 'O valor do produto é obrigatório!',
            'greater_than' => 'Insira um valor maior que zero!'
        ] ,
        'quantity' => [
            'required' => 'A quantidade do produto é obrigatória!',
            'greater_than' => 'Insira um valor maior que zero!'
        ],
        'minimun_stock' => [
            'required' => 'A quantidade de estoque mínimo é obrigatória!',
        ],
        'net_weight' => [
            'required' => 'O peso líquido do produto é obrigatório!',
            'greater_than' => 'Insira um valor maior que zero!'
        ],
        'profit' => [
            'required' => 'O lucro sobre o produto é obrigatório!',
            'greater_than' => 'Insira um valor maior que zero!',            
        ],
        'category' => [
            'required' => 'A categoria é obrigatória!',
        ],
        'manufacturing_date' => [
            'required' => 'A data de fabricação é obrigatória!',
        ],
        'expiration_date' => [
            'required' => 'A data de validade é obrigatória!'
        ]

    ];
}

?>