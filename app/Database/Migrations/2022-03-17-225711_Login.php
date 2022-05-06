<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_funcionario'     => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome_funcionario'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
            ],
            'cpf_funcionario' => [
                'type' => 'CHAR',
                'constraint' => '11',
                'null'       => false,
            ],
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ], 
            'data_admissao' => [
                'type' => 'DATE',
                'null'       => false,
            ], 
            'usuario_funcionario' => [
                'type' => 'VARCHAR',
                'constraint' => '220',
                'null'       => false,
            ], 
            'senha_funcionario' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],  
            'email_funcionario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
            ], 
            'celular_funcionario' => [
                'type' => 'CHAR',
                'constraint' => '14',
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id_funcionario', true);
        $this->forge->createTable('funcionario');
    }

    public function down()
    {
        $this->forge->dropTable('funcionario');
    }
}
