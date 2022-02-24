<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang | Kementrian Kesehatan'
        ];
        return view('welcome_message');
    }
}
