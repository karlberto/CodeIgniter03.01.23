<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {
        $data['title'] = 'Projekte';


        echo view('templates/header',$data);
        echo view('templates/menu');
        echo view('Projekte/projekte');
        echo view('templates/footer');
    }
}
