<?php

namespace App\Controllers;

use App\Models\NilaiSiswaModel;

class Siswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new NilaiSiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Nilai Siswa',
            'siswa' => $this->model->findAll(),
        ];

        return view('siswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Siswa',
        ];

        return view('siswa/create', $data);
    }

    public function store()
    {
        $rules = [
            'nis' => [
                'required',
                'max_length[20]',
                'is_unique[nilai_Siswa.nis]', // Validasi built-in CI4
            ],
            'nm_siswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]',
        ];

        $messages = [
            'nis' => [
                'is_unique' => 'NIS ini sudah terdaftar untuk siswa lain',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->save($this->request->getPost());

        return redirect()->to('/siswa')->with('message', 'Data siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Detail Siswa',
            'siswa' => $this->model->find($id),
        ];

        return view('siswa/show', $data);
    }

    public function edit($id)
    {
        $siswa = $this->model->find($id);
        if (!$siswa) {
            return redirect()->to('/siswa')->with('error', 'Data siswa tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa,
            'current_nis' => $siswa['nis'] // Tambahkan ini untuk validasi
        ];

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $siswa = $this->model->find($id);
        if (!$siswa) {
            return redirect()->to('/siswa')->with('error', 'Data siswa tidak ditemukan.');
        }

        $rules = [
            'nis' => [
                'required',
                'max_length[20]',
                function ($value, $data, &$error) use ($id, $siswa) {
                    // Jika NIS tidak berubah, skip validasi
                    if ($value === $siswa['nis']) {
                        return true;
                    }

                    // Jika NIS berubah, cek keunikan
                    if (!$this->model->isNisUnique($value, $id)) {
                        $error = 'NIS ini sudah terdaftar untuk siswa lain';
                        return false;
                    }
                    return true;
                },
            ],
            'nm_siswa' => 'required|max_length[50]',
            'absen' => 'required|numeric|less_than_equal_to[100]',
            'uts' => 'required|numeric|less_than_equal_to[100]',
            'tugas' => 'required|numeric|less_than_equal_to[100]',
            'uas' => 'required|numeric|less_than_equal_to[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->update($id, $this->request->getPost());

        return redirect()->to('/siswa')->with('message', 'Data siswa berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/siswa')->with('message', 'Data siswa berhasil dihapus.');
    }
}
