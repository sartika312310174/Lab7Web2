<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'Selamat Datang di Website Kami',
            'content' => 'Ini adalah halaman utama menggunakan View Layout.',
        ];

        return view('home', $data);
    }

    public function Tambah()
    {
        return view('Tambah Artikel'); // Gantilah dengan nama view yang sesuai
    }


     public function getAjax()
    {
        // isi kode untuk menangani permintaan Ajax
        return $this->response->setJSON(['status' => 'ok']);
    }

     public function getLab8_vuejs()
    {
        return view('lab8_vuejs');
    }
}
