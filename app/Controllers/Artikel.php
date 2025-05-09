<?php

namespace App\Controllers;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();

        return view('artikel_view', $data);
    }

    public function tambah()
    {
        return view('Artikel_form');
    }

    public function simpan()
    {
        $model = new ArtikelModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'slug' => $this->request->getPost('slug'),
            'isi' => $this->request->getPost('isi'),
            'tanggal_publikasi' => $this->request->getPost('tanggal_publikasi'),
            'status' => $this->request->getPost('status'),
            'author' => $this->request->getPost('author'),
            'meta_deskripsi' => $this->request->getPost('meta_deskripsi'),
            'kata_kunci' => $this->request->getPost('kata_kunci'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ];
        $model->insert($data);
        return redirect()->to('/artikel');
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);
        return view('artikel_edit', $data);
    }

    public function update($id)
    {
        $model = new ArtikelModel();
        $data = [
        'id' => $id,
        'judul' => $this->request->getPost('judul'),
        'slug' => $this->request->getPost('slug'),
        'isi' => $this->request->getPost('isi'),
        'tanggal_publikasi' => $this->request->getPost('tanggal_publikasi'),
        'status' => $this->request->getPost('status'),
        'author' => $this->request->getPost('author'),
        'meta_deskripsi' => $this->request->getPost('meta_deskripsi'),
        'kata_kunci' => $this->request->getPost('kata_kunci'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'deleted_at' => date('Y-m-d H:i:s'),
    ];
    $model->update($id, $data);
    return redirect()->to('/artikel');
    }

    public function hapus($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return redirect()->to('/artikel');
    }

}
