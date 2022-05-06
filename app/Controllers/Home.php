<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;


class Home extends BaseController
{
    private $loginModel;
    private $session;
    public function __construct(){
        $this->loginModel = new \App\Models\LoginModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('login');
    }

   /* public function insere()
	{
		$dados = [
			'usuario_funcionario' => 'alradmin',
			'senha_usuario' => password_hash('ALR#1245#', PASSWORD_DEFAULT)
		];

		(new LoginModel())->save($dados);
	}*/

    public function Login(){
        $dadosLogin = $this->request->getPost('usuario_funcionario');
        $dadosLogin = $this->request->getPost('senha_funcionario');

        $dadosLogin = $this->loginModel->where("usuario_funcionario", $usuario_funcionario)->first();

        if($dadosLogin){

            if($dadosLogin = $this->request->getPost('senha_funcionario')){
                return viwe('home');
            }
            
            
        }
        else
        {
            echo "errado";
            //return viwe('login');
        }
    }

}
     /*
       $dadosLogin = $this->request->getPost();
       echo $dadosLogin['usuario'], $dadosLogin['senha_usuario'];
       */
    