<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    
    protected $table            = 'funcionario';
    protected $primaryKey       = 'id_funcionario';
    protected $allowedFields    = ['usuario_funcionario','senha_funcionario','cpf_funcionario','cargo','data_admissao','email_funcionario','celular_funcionario'];
   /* protected $DBGroup        = 'default';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    //protected $returnType       = 'array';
    
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];*/
}
