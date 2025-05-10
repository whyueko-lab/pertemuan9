<?php

namespace App\Controllers;

use App\Models\NilaiMahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new NilaiMahasiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Nilai Mahasiswa',
            'mahasiswa' => $this->model->findAll(),
        ];

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa',
        ];

        return view('mahasiswa/create', $data);
    }

    public function store()
    {
        $rules = [
            'nim' => [
                'required',
                'max_length[20]',
                'is_unique[nilai_mahasiswa.nim]', // Validasi built-in CI4
            ],
            'nm_mahasiswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]',
        ];

        $messages = [
            'nim' => [
                'is_unique' => 'NIM ini sudah terdaftar untuk siswa lain',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->save($this->request->getPost());

        return redirect()->to('/mahasiswa')->with('message', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => $this->model->find($id),
        ];

        return view('mahasiswa/show', $data);
    }

    public function edit($id)
    {
        $mahasiswa = $this->model->find($id);
        if (!$mahasiswa) {
            return redirect()->to('/mahasiswa')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Data Mahaiswa',
            'mahasiswa' => $mahasiswa,
            'current_nim' => $mahasiswa['nim'] // Tambahkan ini untuk validasi
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $mahasiswa = $this->model->find($id);
        if (!$mahasiswa) {
            return redirect()->to('/mahasiswa')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $rules = [
            'nim' => [
                'required',
                'max_length[20]',
                function ($value, $data, &$error) use ($id, $mahasiswa) {
                    // Jika NIM tidak berubah, skip validasi
                    if ($value === $mahasiswa['nim']) {
                        return true;
                    }

                    // Jika NIM berubah, cek keunikan
                    if (!$this->model->isNimUnique($value, $id)) {
                        $error = 'NIM ini sudah terdaftar untuk mahasiswa lain';
                        return false;
                    }
                    return true;
                },
            ],
            'nm_mahasiswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->update($id, $this->request->getPost());

        return redirect()->to('/mahasiswa')->with('message', 'Data mahasiswa berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/mahasiswa')->with('message', 'Data mahasiswa berhasil dihapus.');
    }
}
