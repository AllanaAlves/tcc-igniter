<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
       $dadosLogin = $this->request->getPost();
       echo $dadosLogin['usuario'], $dadosLogin['senha_usuario']; 
       
       }
}
