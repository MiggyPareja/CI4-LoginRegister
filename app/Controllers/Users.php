<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('templates/header').view('login').view('templates/footer');
    }
    
}
