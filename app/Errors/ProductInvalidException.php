<?php 
namespace App\Errors;

use Exception;

class ProductInvalidException extends Exception{

    private $errors;

    public function __construct($productModel) {
        $this->errors = $productModel->errors();
    }

    public function getErrors(){
        return $this->errors;
    }
}

?>