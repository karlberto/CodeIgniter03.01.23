<?php

namespace App\Controllers;

class Personen extends BaseController
{
    public function index()
    {
        $data['title'] =  'Mitglieder';
        $data['id'] = '1';
        $data['username'] = 'strauss';
        $data['email'] = 'strauss@mail.com';
        $data['projektId'] = '1';

        $data['ausgabe'] = '';

            $data['ausgabe'].= "<tr><td class=\"w-25\">" . $data['id'] . "</td>";
            $data['ausgabe'].= "<td>" . $data['username'] . " </td>";
            $data['ausgabe'].= "<td>" . $data['email'] . " </td>";
            $data['ausgabe'].= "<td>" . $data['projektId'] . " </td>";
            $data['ausgabe'] .= '<td class="text-primary">
                        <i class="fa-regular fa-pen-to-square"></i>
                        <i class="fa-regular fa-trash-can"></i>
                        </td>';
            $data['ausgabe'].= '</tr>';




        echo view('templates/header',$data);
        echo view('templates/menu');
        echo view('Personen/personen',$data);
        echo view('templates/footer');
    }
}
