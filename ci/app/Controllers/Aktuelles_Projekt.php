<?php

namespace App\Controllers;

class Aktuelles_Projekt extends BaseController
{
    public function index()
    {
        $data['title'] = 'ToDo`s (Aktuelles Projekt)';


        echo view('templates/header',$data);
        echo view('templates/menu');
        echo view('Aktuelles_Projekt/aktuelles_Projekt');
        echo view('templates/footer');
    }
}
