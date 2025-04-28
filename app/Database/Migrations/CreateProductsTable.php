<?php 

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'batch' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'supplier' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'value' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'quantity' => [
                'type'       => 'INT',
            ],
            'minimum_stock' => [
                'type'       => 'INT',
            ],
            'net_weight' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'profit' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'manufacturing_date' => [
                'type' => 'DATE',
            ],
            'expiration_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('batch', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
?>