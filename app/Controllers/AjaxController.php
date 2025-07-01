<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtikelModel;

class AjaxController extends Controller
{

    public function index()
   {
       $title = 'Daftar Artikel (AJAX)';
       return view('ajax/index', compact('title'));
   }


    public function getData()
    {
        $model = new ArtikelModel();
        $data = $model->select('artikel.*, kategori.nama_kategori')
                      ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
                      ->findAll();

        return $this->response->setJSON($data);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);

        return $this->response->setJSON(['status' => 'OK']);
    }

       public function tambah()
   {
       $artikel = new \App\Models\ArtikelModel();
       $slug = url_title($this->request->getPost('judul'), '-', true);
       
       $artikel->insert([
           'judul'       => $this->request->getPost('judul'),
           'isi'         => $this->request->getPost('isi'),
           'slug'        => $slug,
           'id_kategori' => $this->request->getPost('id_kategori')
       ]);
   
       return $this->response->setJSON(['status' => 'OK']);
   }

      public function getArtikel($id)
   {
       $model = new \App\Models\ArtikelModel();
       $data = $model->find($id);
       return $this->response->setJSON($data);
   }
   
   public function update()
   {
       $model = new \App\Models\ArtikelModel();
       $id = $this->request->getPost('id');
   
       $model->update($id, [
           'judul'       => $this->request->getPost('judul'),
           'isi'         => $this->request->getPost('isi'),
           'id_kategori' => $this->request->getPost('id_kategori')
       ]);
   
       return $this->response->setJSON(['status' => 'OK']);
   }
}