<?php
namespace App\Controllers;

use App\Errors\ProductInvalidException;
use App\Services\ProductService;
use CodeIgniter\Controller;

class ProductController extends Controller{

    public function index(){
        return view('products/dashboard');
    }

    public function list(){
        $productService = new ProductService();
        $products = $productService->recoverAll();
        return $this->response->setJSON($products)->setStatusCode(200);
    }

    public function show($id){
        $productService = new ProductService();
        $product = $productService->recover($id);
        return $this->response->setJSON($product)->setStatusCode(200);
    }

    public function store(){
        $data = [
            'batch' => $this->request->getPost('batch'),
            'supplier' => $this->request->getPost('supplier'),
            'name' => $this->request->getPost('name'),
            'value' => $this->request->getPost('value'),
            'quantity' => $this->request->getPost('quantity'),
            'minimun_stock' => $this->request->getPost('minimun_stock'),
            'net_weight' => $this->request->getPost('net_weight'),
            'profit' => $this->request->getPost('profit'),
            'category' => $this->request->getPost('category'),
            'manufacturing_date' => $this->request->getPost('manufacturing_date'),
            'expiration_date' => $this->request->getPost('expiration_date')            
        ];
        $productService = new ProductService();
        try {
            $productService->create($data);
            return $this->response->setJSON(['status' => 'success'])->setStatusCode(200);
        } catch (ProductInvalidException $e) {
            return $this->response->setStatusCode(422)->setJSON([
                'error' => $e->getErrors()
            ]);
        }
    }


    public function update($id){
        $data = [
            'batch' => $id,
            'supplier' => $this->request->getPost('supplier'),
            'name' => $this->request->getPost('name'),
            'value' => $this->request->getPost('value'),
            'quantity' => $this->request->getPost('quantity'),
            'minimun_stock' => $this->request->getPost('minimun_stock'),
            'net_weight' => $this->request->getPost('net_weight'),
            'profit' => $this->request->getPost('profit'),
            'category' => $this->request->getPost('category'),
            'manufacturing_date' => $this->request->getPost('manufacturing_date'),
            'expiration_date' => $this->request->getPost('expiration_date')            
        ];
        $productService = new ProductService();

        try{
            $productService->update($data);
            return $this->response->setJSON(['status' => 'success'])->setStatusCode(200);
        }catch (ProductInvalidException $e) {
            return $this->response->setJSON([
                'error' => $e->getErrors()
            ])->setStatusCode(422);            
        }
    }
    
    public function delete($id = null){
        $productService = new ProductService();
        $productService->delete($id);

        return $this->response->setJSON(['status' => 'success']);
    }
}
?>