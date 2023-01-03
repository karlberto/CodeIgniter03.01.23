<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        $data['title'] = 'Aufgaben';


        echo view('templates/header',$data);
        echo view('templates/menu');
        echo view('Aufgaben/aufgaben');
        echo view('templates/footer');
    }
}
