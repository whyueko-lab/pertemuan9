<?php
namespace App\Controllers;
use CodeIgniter\Controller;

//namespace App\Controllers;
//use CodeIgniter\Controller;


use App\Models\Barang_model;

class Barang extends Controller
{
    public function index()
    {
        $model = new Barang_model;
        $data['title'] = 'Data Barang';
        $data['getbarang'] = $model->getBarang();
        echo view('header_view', $data);
        echo view('barang_view', $data);
        echo view('footer_view', $data);
    }

// Tambahkan code di bawah ini
    public function tambah(): void
    {
        $data['title'] = 'Tambah Data Barang';
        echo view(name: 'header_view', data: $data);
        echo view(name: 'tambah_view', data: $data);
        echo view(name: 'footer_view', data: $data);
    }

    public function add(): void
    {
        $model = new Barang_model;
        $data = array (
            'nama_barang'   => $this->request->getPost(index: 'nama'),
            'qty'           => $this->request->getPost(index: 'qty'),
            'harga_beli'    => $this->request->getPost(index: 'beli'),
            'harga_jual'    => $this->request->getPost(index: 'jual'),
        );
        $model->saveBarang(data: $data);
        echo '<script>
                alert("Sukses Tambah Data Barang");
                window.location="'.base_url(relativePath: 'barang').'"
                </script>';
    }

    public function edit($id): void
    {
        $model = new Barang_model;
        $getBarang = $model->getBarang(id: $id)->getRow();
        if(isset($getBarang))
        {
            $data['barang'] = $getBarang;
            $data['title'] = 'Edit'.$getBarang->nama_barang;
    
        echo view('header_view', data: $data);
        echo view('edit_view', data: $data);
        echo view('footer_view', data: $data);

        }else{

            echo '<script>
                    alert("ID barang '.$id.' tidak ditemukan");
                    window.location="'.base_url(relativePath: 'barang').'"
                </script>';
        }
    }
    
    // Function untuk update
    public function update(): void
    {
        $model = new Barang_model;
        $id = $this->request->getPost(index: 'id_barang');
        $data = array(
            'nama_barang' => $this->request->getPost('nama'),
            'qty'         => $this->request->getPost('qty'),
            'harga_beli'  => $this->request->getPost('beli'),
            'harga_jual'  => $this->request->getPost('jual')
        );
        $model->editBarang(data: $data,id: $id);
        echo '<script>
                alert("Sukses Edit Data Barang");
                window.location="' . base_url(relativePath: 'barang').'"
        </script>';
    }

    public function hapus($id): void
    {
        $model = new Barang_model;
        $getBarang = $model->getBarang($id)->getRow();
        if(isset($getBarang))
        {
            $model->hapusBarang($id);
            echo '<script>
                    alert("Sukses Hapus Data Barang");
                    window.location="' . base_url('barang') . '"
                </script>';
        }else{

            echo '<script>
                    alert("ID barang '.$id.' tidak ditemukan");
                    window.location="' . base_url('barang') . '"
                </script>';
        }
    }
}   