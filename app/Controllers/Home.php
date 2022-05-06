<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;


class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

}

