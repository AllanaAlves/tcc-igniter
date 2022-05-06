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

    public function formulario_funcionario(){

        return view('formulario_funcionario');

    }

    public function save(){

        //validacao padrao
        // $validation = $this->validate([

        //     'usuario_funcionario'=>'required|valid_usuario_funcionario|is_unique[funcionario.usuario_funcionario]',
        //     'senha_funcionario'=>'required|matches[senha_funcionario]'

        // ]);

        //validacao customizada
        $validation = $this->validate([

            'usuario_funcionario'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'Coloque o seu Usuário'
                ]
                ],
            /*'senha_funcionario'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'Coloque uma senha'
                ]
                ]     */       
        ]);

        if(!$validation){
            return view('formulario_funcionario',['validation'=>$this->validator]);
        }
        else
        {

            //echo 'ok'; vamos registrar no db
            $usuario_funcionario = $this->request->getPost('usuario_funcionario');
            $senha_funcionario = $this->request->getPost('senha_funcionario');
            $nome_funcionario = $this->request->getPost('nome_funcionario');
            $cpf_funcionario = $this->request->getPost('cpf_funcionario');
            $email_funcionario = $this->request->getPost('email_funcionario');
            $celular_funcionario = $this->request->getPost('celular_funcionario');
            $cargo = $this->request->getPost('cargo');
            $data_admissao = $this->request->getPost('data_admissao');

            $values = [
                'usuario_funcionario'=>$usuario_funcionario,
                'senha_funcionario'=>$senha_funcionario,
                'nome_funcionario'=>$nome_funcionario,
                'cpf_funcionario'=>$cpf_funcionario,
                'email_funcionario'=>$email_funcionario,
                'celular_funcionario'=>$celular_funcionario,
                'cargo'=>$cargo,
                'data_admissao'=>$data_admissao
            ];

            $loginModel = new \App\Models\LoginModel();
            $query = $loginModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','algo aconteceu no registro');
                //return redirect()->to('formulario_funcionario')->with('fail','algo aconteceu no registro');
            }
            else
            {
                return redirect()->to('auth/formulario_funcionario')->with('success','Usuário Funcionário Cadastrado!');
            }

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