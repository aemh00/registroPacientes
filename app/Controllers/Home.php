<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function inicio()
    {
        return view('pacientes/inicio');
    }

    public function formulario()
    {
        return view('pacientes/formulario');
    }

    public function envioPost()
    {
        print_r($_POST);
    }
}
