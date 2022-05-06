<?php

use CodeIgniter\Controller;
namespace App\Controllers;
use App\Models\LoginModel;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }
    public function index()
    {
        return view('login');
    }

    public function registro_func(){

        return view('formulario_funcionario');

    }

    public function save(){
        $validation = $this->validate([

            'usuario_funcionario'=>'required|valid_usuario|is_unique[funcionario.usuario_funcionario]',
            'senha_funcionario'=>'required|matches[senha_funcionario]'

        ]);

        if(!$validation){
            return view('formulario_funcionario',['validation'=>$this->validator]);
        }
        else
        {
            echo 'cadastrado?';
        }
    }

    function check(){
        $validation = $this->validate([
            'usuario_funcionario'=>[
                'rules'=>'required|valid_usuario_funcionario|is_not_unique[funcionario.usuario_funcionario]',
                'errors'=>[
                    'required'=>'Requer usuario!',
                    'valid_usuario_funcionario'=>'Entre com usuario valido',
                    'is_not_unique'=>'usuario nao registrado'

                ]
                ],
                'senha_funcionario'=>[
                    'rules'=>'required|valid_senha_funcionario|is_not_unique[funcionario.senha_funcionario]',
                    'errors'=>[
                        'required'=>'Requer senha!'
    
                    ]
                    ]
        ]);

        if(!$validation){
            return view('login',['validation'=>$this->validator]);
        }else
        {
            $usuario_funcionario = $this->request->getPost('usuario_funcioanrio');
            $senha_funcionario = $this->request->getPost('senha_funcioanrio');
            $loginModel = new \App\Models\LoginModel();
            $user_info = $loginModel->where('usuario_funcionario', $usuario_funcionario)->first();
        }
    }
}