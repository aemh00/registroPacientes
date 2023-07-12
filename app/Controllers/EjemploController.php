<?php

namespace App\Controllers;

class EjemploController extends BaseController
{
    public function index()
    {
        echo view('ejemplo/header');
        echo view('ejemplo/menu');
        echo view('ejemplo/inicio');
        echo view('ejemplo/footer');
    }

    public function otro()
    {
        echo view('ejemplo/header');
        echo view('ejemplo/menu');
        echo view('ejemplo/formulario');
        echo view('ejemplo/footer');
    }
}