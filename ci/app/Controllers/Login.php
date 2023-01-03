<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login';
        echo view('templates/header',$data);
        echo view('login/Login');
        echo view('templates/footer');
    }
}
