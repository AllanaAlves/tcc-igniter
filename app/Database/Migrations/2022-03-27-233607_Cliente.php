<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
     $this->forge->addField([
            'id_cliente' => [
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => false,
            'unsigned'   => true,
            'auto_increment' => true,
            ],
            'nome_cliente'  => [
            'type' => 'VARCHAR',
            'constraint' => '50',
            'null' => false,
            ],
            'cpf_cliente' => [
            'type' => 'CHAR',
            'constraint' => '11',
            'null' => false,  
            ],
            'data_cadastro' =>[
            'type' => 'DATE',
             'null' => false,  
            ],
            'celular_cliente' =>[
            'type' => 'CHAR',
            'constraint' => '14',
            'null' => false,  
            ],
            'email_cliente' =>[
            'type' => 'VARCHAR',
             'constraint' => '50',
             'null' => false,   
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
