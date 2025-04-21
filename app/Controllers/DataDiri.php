<?php
namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\DataDiri_model;

class DataDiri extends Controller
{
    public function index()
    {
        $model = new DataDiri_model;
        $data['title'] = 'Data Diri';
        $data['getDataDiri'] = $model->getDataDiri();
        echo view('header_view', $data);
        echo view('data_diri_view', $data);
        echo view('footer_view', $data);
    }

    // Tambahkan code di bawah ini
    public function tambah(): void
    {
        $data['title'] = 'Tambah Data Diri';
        echo view(name: 'header_view', data: $data);
        echo view(name: 'tambah_data_diri_view', data: $data);
        echo view(name: 'footer_view', data: $data);
    }

    public function add(): void
    {
        $model = new DataDiri_model;
        $data = array (
            'nama'           => $this->request->getPost('nama'),
            'jurusan'        => $this->request->getPost('jurusan'),
            'keahlian'       => $this->request->getPost('keahlian'),
            'alamat'         => $this->request->getPost('alamat'),
            'nomor_telepon'  => $this->request->getPost('nomor_telepon'),
        );
        $model->saveDataDiri($data);
        echo '<script>
                alert("Sukses Tambah Data Diri");
                window.location="'.base_url('data-diri').'"
                </script>';
    }

    public function edit($id): void
    {
        $model = new DataDiri_model;
        $getDataDiri = $model->getDataDiri($id)->getRow();
        if(isset($getDataDiri))
        {
            $data['data_diri'] = $getDataDiri;
            $data['title'] = 'Edit Data Diri: '.$getDataDiri->nama;
    
            echo view('header_view', data: $data);
            echo view('edit_data_diri_view', data: $data);
            echo view('footer_view', data: $data);

        } else {
            echo '<script>
                    alert("ID data diri '.$id.' tidak ditemukan");
                    window.location="'.base_url('data-diri').'"
                </script>';
        }
    }
    
    // Function untuk update
    public function update(): void
    {
        $model = new DataDiri_model;
        $id = $this->request->getPost('id_data_diri');
        $data = array(
            'nama'           => $this->request->getPost('nama'),
            'jurusan'        => $this->request->getPost('jurusan'),
            'keahlian'       => $this->request->getPost('keahlian'),
            'alamat'         => $this->request->getPost('alamat'),
            'nomor_telepon'  => $this->request->getPost('nomor_telepon')
        );
        $model->editDataDiri($data, $id);
        echo '<script>
                alert("Sukses Edit Data Diri");
                window.location="' . base_url('data-diri') .'"
        </script>';
    }

    public function hapus($id): void
    {
        $model = new DataDiri_model;
        $getDataDiri = $model->getDataDiri($id)->getRow();
        if(isset($getDataDiri))
        {
            $model->hapusDataDiri($id);
            echo '<script>
                    alert("Sukses Hapus Data Diri");
                    window.location="' . base_url('data-diri') . '"
                </script>';
        } else {
            echo '<script>
                    alert("ID data diri '.$id.' tidak ditemukan");
                    window.location="' . base_url('data-diri') . '"
                </script>';
        }
    }
}