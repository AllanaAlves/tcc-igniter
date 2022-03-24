<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => true,
            ],
            'usuario'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'email_usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'senha_usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
            ], 
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('');
    }
}
