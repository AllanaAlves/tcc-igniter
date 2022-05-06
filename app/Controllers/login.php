<?php

use CodeIgniter\Controller;
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
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
        /*$dadosLogin = $this->request->getPost('usuario_funcionario');
        $dadosLogin = $this->request->getPost('senha_funcionario');

        //$dadosLogin = $this->loginModel->where("usuario_funcionario", $usuario_funcionario)->first();

        if($dadosLogin){

            if($dadosLogin = $this->request->getPost('senha_funcionario')){
                return viwe('home');
            }
            
            
        }
        else
        {
            //echo "errado";
            header("Location: login");
        }*/





   /* public function Login(){
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
    }*/





    /*public function login_action()
    {
       $model = new LoginModel();

       $result = $model->where('usuario_funcionario',$this->request->getPost('usuario_funcionario'))->first();
       if($result !=null)
       {
           if($result['senha_funcionario'] == $this->request->getPost('senha_funcionario')){
               return viwe('home');
           }
           else
           {
                echo"errado"  ;

           }
       }       
       else
       {
                 echo"errado"  ;
       }


    }
    
    public function insert()
         {
             $data = [ 'usuario_funcionario' =>$this->request->getPost('usuario_funcionario'),
                 'senha_funcionario' =>$this->request->getPost('senha_funcionario') ];

             $db = \Config\Database::connect();
             $builder = $db->table('funcionario');
             $builder->insert($data);
         }

   /* public function insere()
	{
		$data = [ 'usuario_funcionario' =>$this->request->getVar('usuario_funcionario'),
                 'senha_funcionario' =>$this->request->getVar('senha_funcionario') ];

             $db = \Config\Database::connect();
             $builder = $db->table('funcionario');
             $builder->insert($data);
        
	}*/



    /*   public function login()
	{
		$usuario = $this->request->getPost('usuario');
		$senha_usuario = $this->request->getPost('senha_usuario');

		$usuarioModel = new LoginModel();

		$dadosUsuario = $usuarioModel->getByUsuario($usuario);
		if (count($dadosUsuario) > 0) {
			$hashUsuario = $dadosUsuario['senha_usuario'];
			if (password_verify($senha_usuario, $hashUsuario)) {
				session()->set('isLoggedIn', true);
				session()->set('usuario', $dadosUsuario['usuario']);
				return redirect()->to(base_url());
			} else {
				session()->setFlashData('msg', 'Usuário ou Senha incorretos');
				return redirect()->to('/index');
			}
		} else {
			session()->setFlashData('msg', 'Usuário ou Senha incorretos');
			return redirect()->to('login');
		}
	}

	public function signOut()
	{
		session()->destroy();
		return redirect()->to(base_url());
	}*/





     /*  function check(){
           $validation = $this->validate([
               'usuario'=>[
                   'rules'=>'required|valid_usuario|is_not_unique[funcionario.usuario]',
                   'erro'=>[
                       'required'=>'Requer Usuario',
                       'valid_usuario'=>'Entre com um usuario valido',
                       'is_not_unique'=>'Usuario nao cadastrado'
                   ]
                   ],
                   'senha_usuario'=>[
                    'rules'=>'required|valid_senha_usuario|is_not_unique[funcionario.senha_usuario]',
                    'erro'=>[
                        'required'=>'Requer USenha',
                        'valid_usuario'=>'Senha errada?',
                        'is_not_unique'=>'Senha errada??'
                    ]
                   ]
               ]);

               if(!$validation){
                   return viwe('index');
               }else{

                   echo 'Ok Logado.';
               }
       }*/

       /*
       $dadosLogin = $this->request->getPost();
       echo $dadosLogin['usuario'], $dadosLogin['senha_usuario'];
       */
