<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function kategori()
    {
        return view('pages/kategori');
    }

    public function barang()
    {
        return view('pages/barang');
    }
}
