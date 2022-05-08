<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;


class Home extends BaseController
{
    public function index()
    {
        $loginModel = new \App\Models\LoginModel();
        $loginUserID = session()->get('LoginUser');
        $userInfo = $loginModel->find($loginUserID);
        
        return view('home');
    }

}

