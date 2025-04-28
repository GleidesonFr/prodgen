<?php 

namespace App\Services\Interfaces;

interface TemplateCrudService{

    public function create($data);

    public function recover(int $id);

    public function update($data);

    public function delete($id);

    public function recoverAll();

    public function deleteAll();
}


?>