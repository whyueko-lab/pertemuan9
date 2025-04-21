<?php
namespace App\Models;
use CodeIgniter\Model;

class DataDiri_model extends Model
{
    protected $table = 'data_diri'; // Ganti dengan nama tabel Anda

    // Method untuk mengambil data diri berdasarkan ID
    public function getDataDiri($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->getWhere(['id_data_diri' => $id]);
    }

    // Method untuk menyimpan data diri
    public function saveDataDiri($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    // Method untuk mengedit data diri
    public function editDataDiri($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_data_diri', $id);
        return $builder->update($data);
    }

    // Method untuk menghapus data diri
    public function hapusDataDiri($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_data_diri', $id);
        return $builder->delete();
    }
}