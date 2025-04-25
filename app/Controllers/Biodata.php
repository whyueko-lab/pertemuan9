<?php

namespace App\Controllers;
use App\Models\BiodataModel;

class Biodata extends BaseController
{
    public function index()
    {
        $model = new BiodataModel();
        $data['biodata'] = $model->findAll();

        return view('biodata_view', $data);
    }

    public function tambah()
    {
        return view('biodata_form');
    }

    public function simpan()
    {
        $model = new BiodataModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'keahlian' => $this->request->getPost('keahlian'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
        ];
        $model->insert($data);
        return redirect()->to('/biodata');
    }

    public function edit($id)
    {
        $model = new BiodataModel();
        $data['biodata'] = $model->find($id);
        return view('biodata_edit', $data);
    }

    public function update($id)
    {
        $model = new BiodataModel();
        $data = [
        'nama' => $this->request->getPost('nama'),
        'jurusan' => $this->request->getPost('jurusan'),
        'keahlian' => $this->request->getPost('keahlian'),
        'alamat' => $this->request->getPost('alamat'),
        'nomor_telepon' => $this->request->getPost('nomor_telepon'),
    ];
    $model->update($id, $data);
    return redirect()->to('/biodata');
    }

    public function hapus($id)
    {
        $model = new BiodataModel();
        $model->delete($id);
        return redirect()->to('/biodata');
    }

}
