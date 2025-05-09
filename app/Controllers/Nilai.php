<?php

namespace App\Controllers;

use App\Models\NilaiSiswaModel;

class NilaiSiswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new NilaiSiswaModel();
    }

    public function index()
    {
        $data['siswa'] = $this->model->findAll();
        return view('nilai_siswa/index', $data);
    }

    public function create()
    {
        return view('nilai_siswa/create');
    }

    public function store()
    {
        $rules = [
            'nis' => 'required|max_length[20]',
            'nm_siswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->save([
            'nis' => $this->request->getPost('nis'),
            'nm_siswa' => $this->request->getPost('nm_siswa'),
            'absen' => $this->request->getPost('absen'),
            'uts' => $this->request->getPost('uts'),
            'tugas' => $this->request->getPost('tugas'),
            'uas' => $this->request->getPost('uas')
        ]);

        return redirect()->to('/nilai-siswa')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data['siswa'] = $this->model->find($id);
        return view('nilai_siswa/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nis' => 'required|max_length[20]',
            'nm_siswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->save([
            'no_id' => $id,
            'nis' => $this->request->getPost('nis'),
            'nm_siswa' => $this->request->getPost('nm_siswa'),
            'absen' => $this->request->getPost('absen'),
            'uts' => $this->request->getPost('uts'),
            'tugas' => $this->request->getPost('tugas'),
            'uas' => $this->request->getPost('uas')
        ]);

        return redirect()->to('/nilai-siswa')->with('message', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        // Check if the request is POST (for form submission)
        if ($this->request->getMethod() === 'post') {
            $this->model->delete($id);
            return redirect()->to('/nilai-siswa')->with('message', 'Data berhasil dihapus');
        }

        // If not POST, show error or redirect
        return redirect()->to('/nilai-siswa')->with('errors', ['Invalid request method']);
    }
}
