<?php 

namespace App\Errors;

use Exception;

class ProductNotFoundException extends Exception{

    public function productNotFound(){
        return new self('Produto não encontrado!');
    }
}

?>