<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function index()
    {
        return view('login');
    }

    public function cadastro_cliente()
    {
        return view('cadastro_cliente');
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
                'senha_funcionario'=>Hash::make($senha_funcionario),
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
                'rules'=>'required|is_not_unique[funcionario.usuario_funcionario]',
                'errors'=>[
                    'required'=>'Coloque um usuario',
                    'is_not_unique'=> 'Usuario ou senha incorretos.'
                ]
                ],
                'senha_funcionario'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Usuario ou senha incorretos.' 
                    ]
                    ]
        ]);

        if(!$validation){
            return view('login',['validation'=>$this->validator]);
        }else
        {

            $usuario_funcionario = $this->request->getPost('usuario_funcionario');
            $senha_funcionario = $this->request->getPost('senha_funcionario');
            $loginModel = new \App\Models\LoginModel();
            $user_info = $loginModel->where('usuario_funcionario', $usuario_funcionario)->first();
            $check_senha_funcionario = Hash::check($senha_funcionario, $user_info['senha_funcionario']);

            if(!$check_senha_funcionario){
                session()->setFlashdata('fail','senha incorreta');
                return redirect()->to('/auth')->withInput();
            }
            else
            {
                $id_funcionario = $user_info['id_funcionario'];
                session()->set('LoginUser', $id_funcionario);
                return redirect()->to('/Home');
            }
        }
    }

    function logout(){
        if(session()->has('LoginUser')){
            session()->remove('LoginUser');
            return redirect()->to('/auth?access=out')->with('fail','Deslogado.');
        }
    }
}