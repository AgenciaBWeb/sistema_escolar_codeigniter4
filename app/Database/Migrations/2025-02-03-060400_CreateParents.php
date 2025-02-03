<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateParents extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'address_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('address_id');
        $this->forge->addKey('code');
        $this->forge->addKey('name');
        $this->forge->addKey('email');
        $this->forge->addKey('cpf');
        $this->forge->addKey('phone');

        $this->forge->addForeignKey('address_id', 'addresses', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('parents');
    }

    public function down()
    {
        $this->forge->dropTable('parents');
    }
}
