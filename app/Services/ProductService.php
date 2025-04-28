<?php

namespace App\Services;

use App\Errors\ProductInvalidException;
use App\Errors\ProductNotFoundException;
use App\Models\ProductModel;
use App\Services\Interfaces\TemplateCrudService;

class ProductService implements TemplateCrudService{

    public function create($data){
        $model = model(ProductModel::class);
        $id = $model->insert($data);
        if($id){
            return $this->recover($id);
        }
         $errors = new ProductInvalidException($model);
         throw $errors;
    } 

    public function recover($id){
        $model = model(ProductModel::class);
        $data = $model->find($id);
        if(!$data){
           throw new ProductNotFoundException("Produto não encontrado!"); 
        }
        return $data;
    }

    public function update($data){
        error_log(print_r($data, true));
        $model = model(ProductModel::class);
        return $model->update($data['batch'], $data);
    }

    public function delete($id){
        $model = model(ProductModel::class);
        return $model->delete($id);
    }

    public function recoverAll(){
        $model = model(ProductModel::class);
        $products = $model->findAll();

        return $products;
    }

    public function deleteAll(){

    }
}
?>